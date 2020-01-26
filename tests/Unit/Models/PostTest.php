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
}
