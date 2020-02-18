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
    protected $user;
    protected $announcement_group;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->announcement_group = factory(AnnouncementGroup::class)->create();
    }
    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_announcement_group()
    {
        $this->get(route('admin.announcement_groups.show', $this->announcement_group))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_announcement_group()
    {
        $this->actingAs($this->user)
            ->get(route('admin.announcement_groups.show', $this->announcement_group))
            ->assertViewIs('admin.announcement_groups.show')
            ->assertSeeText($this->announcement_group->nombre);
    }
}
