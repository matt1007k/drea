<?php

namespace Tests\Unit\Models;

use App\Models\Album;
use Tests\TestCase;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class PhotoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_photo_belongs_to_album()
    {
        $album = factory(Album::class)->create();
        $photo = factory(Photo::class)->create(['album_id' => $album->id]);

        $this->assertInstanceOf(Album::class, $photo->album);
    }

    /**
     * @test
     */
    public function a_photo_have_a_path_image()
    {
        Storage::fake('photos');
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'photos/' . $image->hashName();
        $image->store('photos', 'public');
        $photo = factory(Photo::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals(Storage::url($url_image), $photo->pathImage());
    }

    /** @test */
    public function a_photo_return_a_collection_by_search()
    {
        $photo1 = factory(Photo::class)->create(['created_at' => now()->subDays(1)]);
        $photo2 = factory(Photo::class)->create();

        $this->assertEquals(
            $photo2->titulo,
            Photo::with('album')->search($photo2->titulo)
                ->orderBy('fecha', 'DESC')->get()->first()->titulo
        );
    }

    /** @test */
    public function a_photo_return_a_new_imagen()
    {
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'photos/' . $image->hashName();

        $photo1 = factory(Photo::class)->create();
        $photo2 = factory(Photo::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals($photo1->imagen, $photo1->getImagenUpdated());
        $this->assertEquals($photo2->imagen, $photo2->getImagenUpdated());
    }

    /** @test */
    public function a_photo_can_delete_storage_image_old()
    {
        Storage::fake('photos');
        $image_old = UploadedFile::fake()->image('image.jpg');
        $url_image_old = 'photos/O' . $image_old->hashName();
        $photo = factory(Photo::class)->create([
            'imagen' => $url_image_old
        ]);


        $image_new = UploadedFile::fake()->image('image.png');
        $url_image_new = 'photos/N' . $image_new->hashName();

        $photo->deleteStorageImage();

        $photo->update([
            'imagen' => $url_image_new
        ]);

        $this->assertEquals($url_image_new, $photo->fresh()->imagen);
        Storage::disk('public')->assertMissing($url_image_old);
    }

    /** @test */
    public function a_photo_is_deleted()
    {
        Storage::fake('photos');
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'photos/' . $image->hashName();
        $photo = factory(Photo::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals(Photo::count(), 1);

        $photo->deletePhoto();

        $this->assertEquals(Photo::count(), 0);
        Storage::disk('public')->assertMissing($url_image);
    }
}
