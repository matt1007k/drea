<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_post_have_to_path_page()
    {
        $post = factory(Post::class)->create(['titulo' => 'titulo prueba']);

        $this->assertEquals(url('/avisos/titulo-prueba'), $post->pathPage());
    }

    /**
     * @test
     */
    public function a_post_is_find_by_the_slug()
    {
        $post = factory(Post::class)->create(['titulo' => 'titulo prueba']);

        $this->assertEquals('slug', $post->getRouteKeyName());
    }

    /**
     * @test
     */
    public function a_post_have_to_path_admin()
    {
        $post = factory(Post::class)->create(['titulo' => 'titulo prueba']);

        $this->assertEquals(route('admin.posts.show', $post), $post->pathAdmin());
    }

    /** @test */
    public function a_post_return_a_collection_by_search()
    {
        $post1 = factory(Post::class)->create(['created_at' => now()->subDays(1)]);
        $post2 = factory(Post::class)->create();

        $this->assertEquals(
            $post2->titulo,
            Post::search($post2->titulo)
                ->orderBy('fecha', 'DESC')->get()->first()->titulo
        );
    }
}
