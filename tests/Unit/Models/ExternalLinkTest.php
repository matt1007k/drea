<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\ExternalLink;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExternalLinkTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_external_link_have_a_path_image()
    {
        Storage::fake('extenal_links');
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'external_links/' . $image->hashName();
        $image->store('external_links', 'public');
        $external_link = factory(ExternalLink::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals(Storage::url($url_image), $external_link->pathImage());
    }

    /** @test */
    public function a_external_link_return_a_collection_by_search()
    {
        $external_link1 = factory(ExternalLink::class)->create(['created_at' => now()->subDays(1)]);
        $external_link2 = factory(ExternalLink::class)->create();

        $this->assertEquals(
            $external_link2->url,
            ExternalLink::search($external_link2->url)
                ->orderBy('fecha', 'DESC')->get()->first()->url
        );
    }

    /** @test */
    public function a_external_link_return_a_new_imagen()
    {
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'external_links/' . $image->hashName();

        $external_link1 = factory(ExternalLink::class)->create();
        $external_link2 = factory(ExternalLink::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals($external_link1->imagen, $external_link1->getImagenUpdated());
        $this->assertEquals($external_link2->imagen, $external_link2->getImagenUpdated());
    }

    /** @test */
    public function a_external_link_can_delete_storage_image_old()
    {
        Storage::fake('external_links');
        $image_old = UploadedFile::fake()->image('image.jpg');
        $url_image_old = 'external_links/O' . $image_old->hashName();
        $external_link = factory(ExternalLink::class)->create([
            'imagen' => $url_image_old
        ]);

        $image_new = UploadedFile::fake()->image('image.png');
        $url_image_new = 'external_links/N' . $image_new->hashName();

        $external_link->deleteStorageImage();

        $external_link->update([
            'imagen' => $url_image_new
        ]);

        $this->assertEquals($url_image_new, $external_link->fresh()->imagen);
        Storage::disk('public')->assertMissing($url_image_old);
    }

    /** @test */
    public function a_external_link_is_deleted()
    {
        Storage::fake('external_links');
        $image = UploadedFile::fake()->image('image.jpg');
        $url_image = 'external_links/' . $image->hashName();
        $external_link = factory(ExternalLink::class)->create([
            'imagen' => $url_image
        ]);

        $this->assertEquals(ExternalLink::count(), 1);

        $external_link->deleteExternalLink();

        $this->assertEquals(ExternalLink::count(), 0);
        Storage::disk('public')->assertMissing($url_image);
    }
}
