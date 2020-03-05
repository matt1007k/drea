<?php

namespace Tests\Feature\Admin\Ad;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanUpdateAnAdTest extends TestCase
{
    use RefreshDatabase;

    protected $ad;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ad = factory(Ad::class)->create();
    }

    /**
     * @test
     */
    public function guest_cannot_see_form_edit_an_ad()
    {
        $this->get(route('admin.ads.edit', $this->ad))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_an_ad()
    {
        $this->actingAs($this->user)
            ->get(route('admin.ads.edit', $this->ad))
            ->assertViewIs('admin.ads.edit')
            ->assertViewHas('ad', $this->ad)
            ->assertSeeText('Editar anuncio');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_an_ad()
    {
        $this->put(route('admin.ads.update', $this->ad), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_an_ad()
    {
        Storage::fake('ads');

        $image = UploadedFile::fake()->image('logo.png');
        $image_url = 'ads/' . $image->hashName();

        $response = $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'imagen' => $image,
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists($image_url);
        $this->assertDatabaseHas('ads', $this->formData([
            'imagen' => $image_url,
        ]));

        $response->assertRedirect(route('admin.ads.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'titulo' => 121,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'titulo' => Str::random(101),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_url_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'url' => '',
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'url' => 121,
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.ads.update', $this->ad), $this->formData([
                'url' => Str::random(251),
            ]))->assertSessionHasErrors(['url']);
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
