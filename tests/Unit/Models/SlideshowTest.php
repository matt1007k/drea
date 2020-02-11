<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Slideshow;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class AbumTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('slideshows');
    }

    /** @test */
    public function a_slideshow_return_a_collection_by_search()
    {
        $slideshow1 = factory(Slideshow::class)->create(['created_at' => now()->subDays(1)]);
        $slideshow2 = factory(Slideshow::class)->create();

        $this->assertEquals(
            $slideshow2->titulo,
            Slideshow::search($slideshow2->titulo)
                ->orderBy('fecha', 'DESC')->get()->first()->titulo
        );
    }

    /** @test */
    public function a_slideshow_return_a_new_imagen()
    {
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'slideshows/' . $image->hashName();

        $slideshow1 = factory(Slideshow::class)->create();
        $slideshow2 = factory(Slideshow::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals($slideshow1->imagen, $slideshow1->getImagenUpdated());
        $this->assertEquals($slideshow2->imagen, $slideshow2->getImagenUpdated());
    }

    /** @test */
    public function a_slideshow_can_delete_storage_image_old()
    {
        $image_old = UploadedFile::fake()->image('image.jpg');
        $url_image_old = 'slideshows/O' . $image_old->hashName();
        $slideshow = factory(Slideshow::class)->create([
            'imagen' => $url_image_old
        ]);


        $image_new = UploadedFile::fake()->image('image.png');
        $url_image_new = 'slideshows/N' . $image_new->hashName();

        $slideshow->deleteStorageImage();

        $slideshow->update([
            'imagen' => $url_image_new
        ]);

        $this->assertEquals($url_image_new, $slideshow->fresh()->imagen);
        Storage::disk('public')->assertMissing($url_image_old);
    }

    /** @test */
    public function a_slideshow_is_deleted()
    {
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'slideshows/' . $image->hashName();
        $slideshow = factory(Slideshow::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals(Slideshow::count(), 1);

        $slideshow->deleteSlideshow();

        $this->assertEquals(Slideshow::count(), 0);
        Storage::disk('public')->assertMissing($url_image);
    }
}
