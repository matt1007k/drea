<?php

namespace Tests\Feature\Admin\Slideshow;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAnSlideshowTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $slideshow;
    protected $image_name_old;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        Storage::fake('slideshows');
        $image_old = UploadedFile::fake()->image('public/img/drea/logo.png');
        $this->image_name_old = 'slideshows/' . $image_old->hashName();
        $this->user = factory(User::class)->create();
        $this->slideshow = factory(Slideshow::class)->create($this->formData([
            'imagen' => $this->image_name_old
        ]));
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_slideshow()
    {
        $this->delete(route('admin.slideshows.destroy', $this->slideshow))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_delete_a_slideshow()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.slideshows.destroy', $this->slideshow));

        // Assert the file was deleted...
        Storage::disk('public')->assertMissing($this->image_name_old);

        $this->assertDatabaseMissing('slideshows', $this->formData([
            'imagen' => $this->image_name_old
        ]));

        $response->assertRedirect(route('admin.slideshows.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer slideshow',
            'descripcion' => 'Mi primer descripcion',
            'imagen' => 'image.png',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true
        ], $override);
    }
}
