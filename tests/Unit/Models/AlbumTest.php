<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class AlbumTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_album_has_many_photos()
    {
        $album = factory(Album::class)->create();
        factory(Photo::class, 2)->create(['album_id' => $album->id]);

        $this->assertInstanceOf(Photo::class, $album->photos->first());
    }

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

    /** @test */
    public function a_album_return_a_new_imagen()
    {
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'albumes/' . $image->hashName();

        $album1 = factory(Album::class)->create();
        $album2 = factory(Album::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals($album1->imagen, $album1->getImagenUpdated());
        $this->assertEquals($album2->imagen, $album2->getImagenUpdated());
    }

    /** @test */
    public function a_album_can_delete_storage_image_old()
    {
        Storage::fake('albumes');
        $image_old = UploadedFile::fake()->image('image.jpg');
        $url_image_old = 'albumes/O' . $image_old->hashName();
        $album = factory(Album::class)->create([
            'imagen' => $url_image_old
        ]);


        $image_new = UploadedFile::fake()->image('image.png');
        $url_image_new = 'albumes/N' . $image_new->hashName();

        $album->deleteStorageImage();

        $album->update([
            'imagen' => $url_image_new
        ]);

        $this->assertEquals($url_image_new, $album->fresh()->imagen);
        Storage::disk('public')->assertMissing($url_image_old);
    }

    /** @test */
    public function a_album_is_deleted()
    {
        Storage::fake('albumes');
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'albumes/' . $image->hashName();
        $album = factory(Album::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals(Album::count(), 1);

        $album->deleteAlbum();

        $this->assertEquals(Album::count(), 0);
        Storage::disk('public')->assertMissing($url_image);
    }
}
