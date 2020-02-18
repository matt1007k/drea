<?php

namespace Tests\Feature\Admin\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAPostTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $post;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->post = factory(Post::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_post()
    {
        $this->get(route('admin.posts.show', $this->post))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_post()
    {
        $this->actingAs($this->user)
            ->get(route('admin.posts.show', $this->post))
            ->assertViewIs('admin.posts.show')
            ->assertSeeText($this->post->titulo);
    }
}
