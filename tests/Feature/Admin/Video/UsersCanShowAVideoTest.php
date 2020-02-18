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

    protected $user;
    protected $video;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->video = factory(Video::class)->create();
    }

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_video()
    {
        $this->get(route('admin.videos.show', $this->video))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_show_a_video()
    {
        $this->actingAs($this->user)
            ->get(route('admin.videos.show', $this->video))
            ->assertViewIs('admin.videos.show')
            ->assertViewHas('video', $this->video)
            ->assertSee($this->video->titulo);
    }
}
