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

class UsersCanDeleteAPhotoTest extends TestCase
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
        factory(Album::class, 2)->create();
        $this->photo = factory(Photo::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_a_photo()
    {
        $this->put(route('admin.photos.destroy', $this->photo))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_delete_a_photo()
    {
        Storage::fake('photos');

        $old_image = UploadedFile::fake()->image('imagen.png');
        $old_image_url = 'photos/' . $old_image->hashName();

        $photo = factory(Photo::class)->create($this->formData([
            'imagen' => $old_image_url
        ]));

        $response = $this->actingAs($this->user)
            ->delete(route('admin.photos.destroy', $photo));

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing($old_image_url);

        $this->assertDatabaseMissing('fotos', $this->formData([
            'imagen' => $old_image_url
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
