<?php

namespace Tests\Feature\Admin\Ad;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanCreateAnAdTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_cannot_see_form_create_an_ad()
    {
        $this->get(route('admin.ads.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_an_ad()
    {
        $this->actingAs($this->user)
            ->get(route('admin.ads.create'))
            ->assertViewIs('admin.ads.create')
            ->assertViewHas('ad', new Ad())
            ->assertSeeText('Registrar anuncio');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_an_ad()
    {
        $this->post(route('admin.ads.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_an_ad()
    {
        Storage::fake('ads');

        $image = UploadedFile::fake()->image('logo.png');
        $image_url = 'ads/' . $image->hashName();

        $response = $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'imagen' => $image,
            ]));

        // Assert the file was stored...
        Storage::disk('public')->assertExists($image_url);
        $this->assertDatabaseHas('ads', $this->formData([
            'imagen' => $image_url,
        ]));

        $response->assertRedirect(route('admin.ads.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'titulo' => 121,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'titulo' => Str::random(101),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_url_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'url' => '',
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'url' => 121,
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'url' => Str::random(251),
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.ads.store'), $this->formData([
                'imagen' => '',
            ]))->assertSessionHasErrors(['imagen']);
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
