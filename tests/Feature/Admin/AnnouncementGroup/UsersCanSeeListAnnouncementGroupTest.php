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
    protected $user;
    protected $announcement_group2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $announcement_group1 = factory(AnnouncementGroup::class)->create(['created_at' => now()->subDays(1)]);
        $this->announcement_group2 = factory(AnnouncementGroup::class)->create(['nombre' => 'AnnouncementGroupo']);
    }

    /** @test */
    public function guest_users_cannot_see_list_announcement_group()
    {
        $this->get(route('admin.announcement_groups.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_announcement_group()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->get(route('admin.announcement_groups.index'));

        $response->assertViewHasAll([
            'announcement_groups',
            'search'
        ])
            ->assertViewIs('admin.announcement_groups.index')
            ->assertSee($this->announcement_group2->nombre);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_announcement_group()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/announcement_groups?search={$this->announcement_group2->nombre}");

        $response->assertViewHas(
            'search',
            $this->announcement_group2->nombre
        )->assertViewHas(
            'announcement_groups',
            AnnouncementGroup::search($this->announcement_group2->nombre)->latest()->get()
        );
    }
}
