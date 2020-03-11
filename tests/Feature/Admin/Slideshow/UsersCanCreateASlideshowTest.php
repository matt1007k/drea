<?php

namespace Tests\Feature\Admin\slideshow;

use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanCreateASlideshowTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_slideshow()
    {
        $this->get(route('admin.slideshows.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_slideshow()
    {
        $this->actingAs($this->user)
            ->get(route('admin.slideshows.create'))
            ->assertViewIs('admin.slideshows.create')
            ->assertViewHas('slideshow', new Slideshow)
            ->assertSeeText('Registrar slideshow');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_slideshow()
    {
        $this->post(route('admin.slideshows.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_slideshow()
    {
        Storage::fake('slideshows');

        $image = UploadedFile::fake()->image('public/img/drea/logo.png');
        $image_url = 'slideshows/' . $image->hashName();

        $response = $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'imagen' => $image,
            ]));

        // Assert the file was stored...
        Storage::disk('public')->assertExists($image_url);
        $this->assertDatabaseHas('slideshows', $this->formData([
            'imagen' => $image_url,
        ]));

        $response->assertRedirect(route('admin.slideshows.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'titulo' => 121,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'titulo' => Str::random(101),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_url_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'url' => '',
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'fecha' => '',
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.slideshows.store'), $this->formData([
                'imagen' => '',
            ]))->assertSessionHasErrors(['imagen']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer slideshow',
            'url' => '/mi-primer-slideshow',
            'imagen' => 'image.png',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true,
        ], $override);
    }
}
