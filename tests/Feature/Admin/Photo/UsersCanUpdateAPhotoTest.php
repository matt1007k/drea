<?php

namespace Tests\Feature\Admin\Photo;

use App\Models\Album;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAPhotoTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $photo;
    protected $pathLogin;

    public function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->photo = factory(Photo::class)->create();
    }
    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_photo()
    {
        $this->get(route('admin.photos.edit', $this->photo))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_photo()
    {
        $this->actingAs($this->user)
            ->get(route('admin.photos.edit', $this->photo))
            ->assertViewIs('admin.photos.edit')
            ->assertViewHas('photo', $this->photo)
            ->assertViewHas('albums', Album::orderBy('titulo', 'ASC')->get())
            ->assertSeeText('Editar foto');
    }

    /**
     * @test
     */
    public function guest_users_cannot_edit_photo()
    {
        $this->put(route('admin.photos.update', $this->photo), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_edit_a_photo()
    {
        Storage::fake('photos');

        $old_image = UploadedFile::fake()->image('imagen.png');
        $old_image_url = 'photos/' . $old_image->hashName();

        $photo = factory(Photo::class)->create($this->formData([
            'imagen' => $old_image_url
        ]));

        $new_image = UploadedFile::fake()->image('imagen.png');
        $new_image_url = 'photos/' . $new_image->hashName();

        $response = $this->actingAs($this->user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'imagen' => $new_image
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists($new_image_url);

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing($old_image_url);

        $this->assertDatabaseHas('fotos', $this->formData([
            'imagen' => $new_image_url
        ]));

        $response->assertRedirect(route('admin.photos.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.photos.update', $this->photo), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.photos.update', $this->photo), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.photos.update', $this->photo), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_album_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.photos.update', $this->photo), $this->formData([
                'album_id' => ''
            ]))->assertSessionHasErrors(['album_id']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.photos.update', $this->photo), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_must_be_an_image()
    {
        $this->actingAs($this->user)
            ->put(route('admin.photos.update', $this->photo), $this->formData([
                'imagen' => 'phf.pdf'
            ]))->assertSessionHasErrors(['imagen']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer Photo',
            'album_id' => "1",
            'imagen' => 'image.png',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true
        ], $override);
    }
}
