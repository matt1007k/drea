<?php

namespace Tests\Feature\Admin\Video;

use Tests\TestCase;
use App\Models\User;
use App\Models\Video;
use App\Models\TypeVideo;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListVideoTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $video2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $video1 = factory(Video::class)->create(['created_at' => now()->subDays(1)]);
        $this->video2 = factory(Video::class)->create(['titulo' => 'Videoo']);
    }

    /** @test */
    public function guest_users_cannot_see_list_video()
    {
        $this->get(route('admin.videos.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_video()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.videos.index'));

        $response->assertViewHasAll([
            'videos',
            'search'
        ])
            ->assertViewIs('admin.videos.index')
            ->assertSee($this->video2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_video()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/videos?search={$this->video2->titulo}");

        $response->assertViewHas(
            'search',
            $this->video2->titulo
        )->assertViewHas(
            'videos',
            Video::search($this->video2->titulo)->latest()->get()
        );
    }
}
