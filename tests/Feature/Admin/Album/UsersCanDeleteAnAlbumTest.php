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

class UsersCanDeleteAnAlbumTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     */
    public function guest_users_cannot_delete_an_album()
    {
        $album = factory(Album::class)->create();
        $this->put(route('admin.albums.destroy', $album))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_delete_an_album()
    {
        Storage::fake('albumes');

        $user = factory(User::class)->create();

        $old_image = UploadedFile::fake()->image('imagen.png');
        $album = factory(Album::class)->create($this->formData([
            'imagen' => 'albumes/' . $old_image->hashName()
        ]));

        $response = $this->actingAs($user)
            ->delete(route('admin.albums.destroy', $album));

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing('albumes/' . $old_image->hashName());

        $this->assertDatabaseMissing('albumes', $this->formData([
            'imagen' => 'albumes/' . $old_image->hashName()
        ]));

        $response->assertRedirect(route('admin.albums.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
