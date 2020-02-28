<?php

namespace Tests\Feature\Admin\Announcement;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanUpdateAnAnnouncementTest extends TestCase
{
    use RefreshDatabase;
    protected $user;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        factory(Announcement::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_an_announcement()
    {
        $this->get(route('admin.announcements.edit', Announcement::first()))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_an_announcement()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user)
            ->get(route('admin.announcements.edit', Announcement::first()))
            ->assertViewHasAll([
                'announcement',
                'grupos',
            ])
            ->assertViewIs('admin.announcements.edit');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_an_announcement()
    {
        $this->put(route('admin.announcements.update', Announcement::first()), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_update_an_announcement()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData());

        $this->assertDatabaseHas('announcements', $this->formData());

        $response->assertRedirect(route('admin.announcements.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_grupo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'grupo_id' => '',
            ]))->assertSessionHasErrors(['grupo_id']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'titulo' => 1212,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_400_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'titulo' => Str::random(401),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_numero_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'numero' => '',
            ]))->assertSessionHasErrors(['numero']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'fecha' => '',
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_estado_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'estado' => '',
            ]))->assertSessionHasErrors(['estado']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer announcemento',
            'numero' => '132',
            'fecha' => '2020-02-07 09:29:00',
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ], $override);
    }
}
