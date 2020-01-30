<?php

namespace Tests\Unit\Models;

use App\Models\Album;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class albumTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_album_have_to_path_page()
    {
        $album = factory(Album::class)->create(['titulo' => 'titulo prueba']);

        $this->assertEquals(url('/albumes/titulo-prueba'), $album->pathPage());
    }

    /**
     * @test
     */
    public function a_album_is_find_by_the_slug()
    {
        $album = factory(Album::class)->create(['titulo' => 'titulo prueba']);

        $this->assertEquals('slug', $album->getRouteKeyName());
    }

    /**
     * @test
     */
    public function a_album_have_to_path_admin()
    {
        $album = factory(Album::class)->create(['titulo' => 'titulo prueba']);

        $this->assertEquals(route('admin.albums.show', $album), $album->pathAdmin());
    }

    /** @test */
    public function a_album_return_a_collection_by_search()
    {
        $album1 = factory(Album::class)->create(['created_at' => now()->subDays(1)]);
        $album2 = factory(Album::class)->create();

        $this->assertEquals(
            $album2->titulo,
            album::search($album2->titulo)
                ->orderBy('fecha', 'DESC')->get()->first()->titulo
        );
    }
}
