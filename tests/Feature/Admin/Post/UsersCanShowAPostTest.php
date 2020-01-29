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

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_post()
    {
        $post = factory(Post::class)->create();
        $this->get(route('admin.posts.show', $post))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_post()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $this->actingAs($user)
            ->get(route('admin.posts.show', $post))
            ->assertViewIs('admin.posts.show')
            ->assertSeeText($post->titulo);
    }
}
