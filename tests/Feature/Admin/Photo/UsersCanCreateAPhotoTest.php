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
    public function setUp(): void
    {
        parent::setUp();
        factory(Album::class, 2)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_photo()
    {
        $this->get(route('admin.photos.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_photo()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
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
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_photo()
    {
        Storage::fake('photos');

        $user = factory(User::class)->create();
        $image = UploadedFile::fake()->image('public/img/drea/logo.png');

        $response = $this->actingAs($user)
            ->post(route('admin.photos.store'), $this->formData([
                'imagen' => $image
            ]));

        // Assert the file was stored...
        Storage::disk('public')->assertExists('photos/' . $image->hashName());
        $this->assertDatabaseHas('fotos', $this->formData([
            'imagen' => 'photos/' . $image->hashName()
        ]));

        $response->assertRedirect(route('admin.photos.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.photos.store'), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.photos.store'), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.photos.store'), $this->formData([
                'titulo' => Str::random(101)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_album_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.photos.store'), $this->formData([
                'album_id' => ''
            ]))->assertSessionHasErrors(['album_id']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.photos.store'), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
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
