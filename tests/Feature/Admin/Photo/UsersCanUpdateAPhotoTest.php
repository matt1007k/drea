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
    public function setUp(): void
    {
        parent::setUp();
        factory(Album::class, 2)->create();

    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_photo()
    {
        $photo = factory(Photo::class)->create();
        $this->get(route('admin.photos.edit', $photo))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_photo()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->get(route('admin.photos.edit', $photo))
            ->assertViewIs('admin.photos.edit')
            ->assertViewHas('photo', $photo)
            ->assertViewHas('albums', Album::orderBy('titulo', 'ASC')->get())
            ->assertSeeText('Editar foto');
    }

    /**
     * @test
     */
    public function guest_users_cannot_edit_photo()
    {
        $photo = factory(Photo::class)->create();
        $this->put(route('admin.photos.update', $photo), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_edit_a_photo()
    {
        Storage::fake('photos');

        $user = factory(User::class)->create();
        $old_image = UploadedFile::fake()->image('imagen.png');
        $photo = factory(Photo::class)->create($this->formData([
            'imagen' => 'photos/' . $old_image->hashName()
        ]));

        $new_image = UploadedFile::fake()->image('imagen.png');

        $response = $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'imagen' => $new_image
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists('photos/' . $new_image->hashName());

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing('photos/' . $old_image->hashName());

        $this->assertDatabaseHas('fotos', $this->formData([
            'imagen' => 'photos/' . $new_image->hashName()
        ]));

        $response->assertRedirect(route('admin.photos.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_album_is_required()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'album_id' => ''
            ]))->assertSessionHasErrors(['album_id']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_must_be_an_image()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->put(route('admin.photos.update', $photo), $this->formData([
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
