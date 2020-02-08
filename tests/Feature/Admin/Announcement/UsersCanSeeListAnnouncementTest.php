<?php

namespace Tests\Feature\Admin\Announcement;

use Tests\TestCase;
use App\Models\User;
use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListAnnouncementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_announcement()
    {
        $this->get(route('admin.announcements.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_announcement()
    {

        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $grupo = factory(AnnouncementGroup::class)->create();
        $announcement1 = factory(Announcement::class)->create(['grupo_id' => $grupo->id, 'created_at' => now()->subDays(1)]);
        $announcement2 = factory(Announcement::class)->create(['grupo_id' => $grupo->id]);

        $response = $this->actingAs($user)
            ->get(route('admin.announcements.index'));

        $response->assertViewHasAll([
            'announcements',
            'grupo',
            'grupos',
            'search'
        ])
            ->assertViewIs('admin.announcements.index')
            ->assertSee($announcement2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_announcement_group_on_the_list_announcement()
    {

        $user = factory(User::class)->create();
        $grupo = factory(AnnouncementGroup::class)->create();
        $announcement1 = factory(Announcement::class)->create(['grupo_id' => $grupo->id, 'created_at' => now()->subDays(1)]);
        $announcement2 = factory(Announcement::class)->create(['grupo_id' => $grupo->id]);

        $response = $this->actingAs($user)
            ->get("/admin/announcements?grupo={$grupo->nombre}");

        $response->assertViewHas(
            'grupo',
            $grupo->nombre
        )->assertViewHas(
            'announcements',
            Announcement::with('grupo')->byGroup($grupo->nombre)->latest()->get()
        );
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_announcement()
    {
        $user = factory(User::class)->create();
        $grupo = factory(AnnouncementGroup::class)->create();
        $announcement1 = factory(Announcement::class)->create(['grupo_id' => $grupo->id, 'created_at' => now()->subDays(1)]);
        $announcement2 = factory(Announcement::class)->create(['titulo' => 'Announcemento', 'grupo_id' => $grupo->id]);

        $response = $this->actingAs($user)
            ->get("/admin/announcements?grupo={$grupo->nombre}&search={$announcement2->titulo}");

        $response->assertViewHas(
            'grupo',
            $grupo->nombre
        )->assertViewHas(
            'search',
            $announcement2->titulo
        )->assertViewHas(
            'announcements',
            Announcement::with('grupo')->search($announcement2->titulo)->latest()->get()
        );
    }
}
