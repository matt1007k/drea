<?php

namespace Tests\Feature\Admin\AnnouncementGroup;

use Tests\TestCase;
use App\Models\AnnouncementGroup;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAnAnnouncementGroupTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_announcement_group()
    {
        $announcement_group = factory(AnnouncementGroup::class)->create();
        $this->get(route('admin.announcement_groups.show', $announcement_group))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_announcement_group()
    {
        $user = factory(User::class)->create();
        $announcement_group = factory(AnnouncementGroup::class)->create();

        $this->actingAs($user)
            ->get(route('admin.announcement_groups.show', $announcement_group))
            ->assertViewIs('admin.announcement_groups.show')
            ->assertSeeText($announcement_group->nombre);
    }
}
