<?php

namespace Tests\Feature\Admin\AnnouncementLink;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use App\Models\AnnouncementLink;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAnAnnouncementLinkTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $announcement;
    protected $announcement_link;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $announcement_group = factory(AnnouncementGroup::class)->create();
        $this->announcement = factory(Announcement::class)->create(['grupo_id' => $announcement_group->id]);
        $this->announcement_link = factory(AnnouncementLink::class)->create(['announcement_id' => $this->announcement->id]);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_an_announcement_link()
    {
        $this->get(route('admin.announcements.links.edit', [$this->announcement, $this->announcement_link]))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_an_announcement_link()
    {
        $this->actingAs($this->user)
            ->get(route('admin.announcements.links.edit', [$this->announcement, $this->announcement_link]))
            ->assertViewHas(
                'link',
                $this->announcement_link
            )->assertViewHas(
                'announcement',
                $this->announcement
            )
            ->assertViewIs('admin.announcement_links.edit');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_an_announcement_link()
    {
        $this->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_update_an_announcement_link()
    {
        $response = $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData());

        $this->assertDatabaseHas('announcement_links', $this->formData());

        $response->assertRedirect(route('admin.announcements.show', $this->announcement))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData([
                'titulo' => 1212
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_200_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData([
                'titulo' => Str::random(201)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_url_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData([
                'url' => ''
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData([
                'url' => 1212
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.links.update', [$this->announcement, $this->announcement_link]), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer announcement_linko',
            'url' => 'documentos/archivo.pdf',
            'fecha' => '2020-02-07 09:29:00',
            'announcement_id' => 1,
        ], $override);
    }
}
