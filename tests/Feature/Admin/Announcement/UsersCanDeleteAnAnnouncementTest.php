<?php

namespace Tests\Feature\Admin\Announcement;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAnAnnouncementTest extends TestCase
{
    use RefreshDatabase;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';
        factory(AnnouncementGroup::class)->create();
        factory(Announcement::class)->create($this->formData());
    }
    /**
     * @test
     */
    public function guest_users_cannot_destroy_an_announcement()
    {
        $this->delete(route('admin.announcements.destroy', Announcement::first()), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_destroy_an_announcement()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->delete(route('admin.announcements.destroy', Announcement::first()), $this->formData());

        $this->assertDatabaseMissing('announcements', $this->formData());

        $response->assertRedirect(route('admin.announcements.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
