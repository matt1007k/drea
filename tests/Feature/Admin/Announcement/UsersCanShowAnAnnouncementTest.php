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

    protected function setUp(): void
    {
        parent::setUp();
        factory(Announcement::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_show_an_announcement()
    {
        $this->get(route('admin.announcements.show', Announcement::first()))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_show_an_announcement()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.announcements.show', Announcement::first()))
            ->assertViewHas(
                'announcement',
                Announcement::first()
            )
            ->assertViewIs('admin.announcements.show');
    }
}
