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

class UsersCanDeleteAnAnnouncementLinkTest extends TestCase
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
        $this->announcement_link = factory(AnnouncementLink::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_an_announcement_link()
    {
        $this->delete(route('admin.announcements.links.destroy', [$this->announcement, $this->announcement_link]), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_delete_an_announcement_link()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.announcements.links.destroy', [$this->announcement, $this->announcement_link]), $this->formData());

        $this->assertDatabaseMissing('announcement_links', $this->formData());

        $response->assertRedirect(route('admin.announcements.show', $this->announcement))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
