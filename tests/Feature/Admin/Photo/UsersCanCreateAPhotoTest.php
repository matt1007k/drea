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

class UsersCanCreateAPhotoTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $pathLogin;

    public function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        factory(Album::class, 2)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_photo()
    {
        $this->get(route('admin.photos.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_photo()
    {
        $this->actingAs($this->user)
            ->get(route('admin.photos.create'))
            ->assertViewIs('admin.photos.create')
            ->assertViewHas('photo', new Photo)
            ->assertViewHas('albums', Album::orderBy('titulo', 'ASC')->get())
            ->assertSeeText('Registrar foto');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_photo()
    {
        $this->post(route('admin.photos.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_photo()
    {
        Storage::fake('photos');

        $image = UploadedFile::fake()->image('public/img/drea/logo.png');
        $image_url = 'photos/' . $image->hashName();

        $response = $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'imagen' => $image
            ]));

        // Assert the file was stored...
        Storage::disk('public')->assertExists($image_url);
        $this->assertDatabaseHas('fotos', $this->formData([
            'imagen' => $image_url
        ]));

        $response->assertRedirect(route('admin.photos.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_album_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'album_id' => ''
            ]))->assertSessionHasErrors(['album_id']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.photos.store'), $this->formData([
                'imagen' => ''
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
