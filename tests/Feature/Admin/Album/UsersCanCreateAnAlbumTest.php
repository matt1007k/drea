<?php

namespace Tests\Feature\Admin\album;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Album;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAnAlbumTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_post()
    {
        $this->get(route('admin.albums.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_post()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.albums.create'))
            ->assertViewIs('admin.albums.create')
            ->assertViewHas('album', new Album)
            ->assertSeeText('Registrar álbum');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_post()
    {
        $this->post(route('admin.albums.store'), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_post()
    {
        Storage::fake('albumes');

        $user = factory(User::class)->create();
        $image = UploadedFile::fake()->image('public/img/drea/logo.png');

        $response = $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'imagen' => $image
            ]));

        // Assert the file was stored...
        Storage::disk('public')->assertExists('albumes/' . $image->hashName());
        $this->assertDatabaseHas('albumes', $this->formData([
            'imagen' => 'albumes/' . $image->hashName()
        ]));

        $response->assertRedirect(route('admin.albums.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'titulo' => Str::random(101)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_descripcion_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'descripcion' => ''
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'descripcion' => 121
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_may_not_be_greater_than_250_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'descripcion' => Str::random(251)
            ]));

        $response->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.albums.store'), $this->formData([
                'imagen' => ''
            ]))->assertSessionHasErrors(['imagen']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer album',
            'descripcion' => 'Mi primer descripcion',
            'imagen' => 'image.png',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true
        ], $override);
    }
}
