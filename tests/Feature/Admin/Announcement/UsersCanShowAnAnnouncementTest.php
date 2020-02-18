<?php

namespace Tests\Feature\Admin\Announcement;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAnAnnouncementTest extends TestCase
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
    public function guest_users_cannot_see_show_an_announcement()
    {
        $this->get(route('admin.announcements.show', Announcement::first()))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_show_an_announcement()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user)
            ->get(route('admin.announcements.show', Announcement::first()))
            ->assertViewHas(
                'announcement',
                Announcement::first()
            )
            ->assertViewIs('admin.announcements.show');
    }
}
