<?php

namespace Tests\Feature\Admin\Photo;

use App\Models\Album;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteADeleteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        factory(Album::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_a_photo()
    {
        $photo = factory(Photo::class)->create();
        $this->put(route('admin.photos.destroy', $photo))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_delete_a_photo()
    {
        Storage::fake('photos');

        $user = factory(User::class)->create();

        $old_image = UploadedFile::fake()->image('imagen.png');
        $photo = factory(Photo::class)->create($this->formData([
            'imagen' => 'photos/' . $old_image->hashName()
        ]));

        $response = $this->actingAs($user)
            ->delete(route('admin.photos.destroy', $photo));

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing('photos/' . $old_image->hashName());

        $this->assertDatabaseMissing('fotos', $this->formData([
            'imagen' => 'photos/' . $old_image->hashName()
        ]));

        $response->assertRedirect(route('admin.photos.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer Photo',
            'album_id' => 1,
            'imagen' => 'image.png',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true
        ], $override);
    }
}
