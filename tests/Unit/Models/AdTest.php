<?php

namespace Tests\Unit\Models;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_ad_return_a_new_imagen()
    {
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'ads/' . $image->hashName();

        $ad1 = factory(Ad::class)->create();
        $ad2 = factory(Ad::class)->create([
            'imagen' => $url_image,
        ]);

        $this->assertEquals($ad1->imagen, $ad1->getImagenUpdated());
        $this->assertEquals($ad2->imagen, $ad2->getImagenUpdated());
    }

    /** @test */
    public function a_ad_can_delete_storage_image_old()
    {
        Storage::fake('ads');
        $image_old = UploadedFile::fake()->image('image.jpg');
        $url_image_old = 'ads/O' . $image_old->hashName();
        $ad = factory(Ad::class)->create([
            'imagen' => $url_image_old,
        ]);

        $image_new = UploadedFile::fake()->image('image.png');
        $url_image_new = 'ads/N' . $image_new->hashName();

        $ad->deleteStorageImage();

        $ad->update([
            'imagen' => $url_image_new,
        ]);

        $this->assertEquals($url_image_new, $ad->fresh()->imagen);
        Storage::disk('public')->assertMissing($url_image_old);
    }

    /** @test */
    public function a_ad_is_deleted()
    {
        Storage::fake('ads');
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'ads/' . $image->hashName();
        $ad = factory(Ad::class)->create([
            'imagen' => $url_image,
        ]);

        $this->assertEquals(Ad::count(), 1);

        $ad->deleteAd();

        $this->assertEquals(Ad::count(), 0);
        Storage::disk('public')->assertMissing($url_image);
    }
}
