<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListPostTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $post2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $post1 = factory(Post::class)->create(['created_at' => now()->subDays(1)]);
        $this->post2 = factory(Post::class)->create(['titulo' => 'posto']);
    }

    /** @test */
    public function guest_users_cannot_see_list_post()
    {
        $this->get(route('admin.posts.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_post()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.posts.index'));

        $response->assertViewHasAll([
            'posts',
            'search'
        ])
            ->assertViewIs('admin.posts.index')
            ->assertSee($this->post2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_post()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/avisos?search={$this->post2->titulo}");

        $response->assertViewHas(
            'search',
            $this->post2->titulo
        )->assertViewHas(
            'posts',
            Post::search($this->post2->titulo)->orderBy('fecha', 'DESC')->get()
        );
    }
}
