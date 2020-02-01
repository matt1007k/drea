<?php

namespace Tests\Feature\Admin\AnnouncementGroup;

use Tests\TestCase;
use App\Models\User;
use App\Models\AnnouncementGroup;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListAnnouncementGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_announcement_group()
    {
        $this->get(route('admin.announcement_groups.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_announcement_group()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $announcement_group1 = factory(AnnouncementGroup::class)->create(['created_at' => now()->subDays(1)]);
        $announcement_group2 = factory(AnnouncementGroup::class)->create();

        $response = $this->actingAs($user)
            ->get(route('admin.announcement_groups.index'));

        $response->assertViewHasAll([
            'announcement_groups',
            'search'
        ])
            ->assertViewIs('admin.announcement_groups.index')
            ->assertSee($announcement_group2->nombre);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_announcement_group()
    {
        $user = factory(User::class)->create();
        $announcement_group1 = factory(AnnouncementGroup::class)->create(['created_at' => now()->subDays(1)]);
        $announcement_group2 = factory(AnnouncementGroup::class)->create(['nombre' => 'AnnouncementGroupo']);

        $response = $this->actingAs($user)
            ->get("/admin/announcement_groups?search={$announcement_group2->nombre}");

        $response->assertViewHas(
            'search',
            $announcement_group2->nombre
        )->assertViewHas(
            'announcement_groups',
            AnnouncementGroup::search($announcement_group2->nombre)->latest()->get()
        );
    }
}
