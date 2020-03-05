<?php

namespace Tests\Feature\Admin\Ad;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UsersCanDeleteAnAdTest extends TestCase
{
    use RefreshDatabase;

    protected $ad;
    protected $image_url;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('ads');
        $image = UploadedFile::fake()->image('logo.png');
        $this->image_url = 'ads/' . $image->hashName();
        $this->ad = factory(Ad::class)->create($this->formData(['imagen' => $this->image_url]));
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_an_ad()
    {
        $this->delete(route('admin.ads.destroy', $this->ad), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_delete_an_ad()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.ads.destroy', $this->ad));

        // Assert the file was deleted...
        Storage::disk('public')->assertMissing($this->image_url);
        $this->assertDatabaseMissing('ads', $this->formData([
            'imagen' => $this->image_url,
        ]));

        $response->assertRedirect(route('admin.ads.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer anuncio',
            'url' => 'www.google.com',
            'imagen' => 'image.png',
            'publicado' => true,
        ], $override);
    }
}
