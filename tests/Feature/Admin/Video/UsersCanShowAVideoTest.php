<?php

namespace Tests\Feature\Admin\Video;

use App\Models\Video;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAVideoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_video()
    {
        $video = factory(Video::class)->create();
        $this->get(route('admin.videos.show', $video))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_show_a_video()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $video = factory(Video::class)->create();

        $this->actingAs($user)
            ->get(route('admin.videos.show', $video))
            ->assertViewIs('admin.videos.show')
            ->assertViewHas('video', $video)
            ->assertSee($video->titulo);
    }
}
