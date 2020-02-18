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

class UsersCanUpdateAnAlbumTest extends TestCase
{
    use RefreshDatabase;
    protected $user;
    protected $album;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->album = factory(Album::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_album()
    {
        $this->get(route('admin.albums.edit', $this->album))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_album()
    {
        $this->actingAs($this->user)
            ->get(route('admin.albums.edit', $this->album))
            ->assertViewIs('admin.albums.edit')
            ->assertViewHas('album', $this->album)
            ->assertSeeText('Editar álbum');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_an_album()
    {
        $this->put(route('admin.albums.update', $this->album))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_an_album()
    {
        Storage::fake('albumes');

        $old_image = UploadedFile::fake()->image('imagen.png');
        $old_image_url = 'albumes/' . $old_image->hashName();

        $this->album = factory(Album::class)->create($this->formData([
            'imagen' => $old_image_url
        ]));

        $new_image = UploadedFile::fake()->image('imagen.png');
        $new_image_url = 'albumes/' . $new_image->hashName();

        $response = $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'imagen' => $new_image
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists($new_image_url);

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing($old_image_url);

        $this->assertDatabaseHas('albumes', $this->formData([
            'imagen' => $new_image_url
        ]));

        $response->assertRedirect(route('admin.albums.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_descripcion_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'descripcion' => ''
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'descripcion' => 121
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'descripcion' => Str::random(251)
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.albums.update', $this->album), $this->formData([
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
