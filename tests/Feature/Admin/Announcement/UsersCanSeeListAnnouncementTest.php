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
    protected $user;
    protected $grupo;
    protected $announcement2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->grupo = factory(AnnouncementGroup::class)->create();
        $announcement1 = factory(Announcement::class)->create(['grupo_id' => $this->grupo->id, 'created_at' => now()->subDays(1)]);
        $this->announcement2 = factory(Announcement::class)->create(['titulo' => 'Announcemento', 'grupo_id' => $this->grupo->id]);
    }

    /** @test */
    public function guest_users_cannot_see_list_announcement()
    {
        $this->get(route('admin.announcements.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_announcement()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->get(route('admin.announcements.index'));

        $response->assertViewHasAll([
            'announcements',
            'grupo',
            'grupos',
            'search'
        ])
            ->assertViewIs('admin.announcements.index')
            ->assertSee($this->announcement2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_announcement_group_on_the_list_announcement()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/announcements?grupo={$this->grupo->nombre}");

        $response->assertViewHas(
            'grupo',
            $this->grupo->nombre
        )->assertViewHas(
            'announcements',
            Announcement::with('grupo')->byGroup($this->grupo->nombre)->latest()->get()
        );
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_announcement()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/announcements?grupo={$this->grupo->nombre}&search={$this->announcement2->titulo}");

        $response->assertViewHas(
            'grupo',
            $this->grupo->nombre
        )->assertViewHas(
            'search',
            $this->announcement2->titulo
        )->assertViewHas(
            'announcements',
            Announcement::with('grupo')->search($this->announcement2->titulo)->latest()->get()
        );
    }
}
