<?php

namespace Tests\Feature\Admin\menu;

use App\Models\Album;
use Tests\TestCase;
use App\Models\User;
use App\Models\Photo;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListPhotoTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $album;
    protected $photo2;
    protected $pathLogin;

    public function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->album = factory(Album::class)->create();
        $photo1 = factory(Photo::class)->create(['album_id' => $this->album->id, 'created_at' => now()->subDays(1)]);
        $this->photo2 = factory(Photo::class)->create(['titulo' => 'photo', 'album_id' => $this->album->id]);
    }

    /** @test */
    public function guest_users_cannot_see_list_photo()
    {
        $this->get(route('admin.photos.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_photo()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.photos.index'));

        $response->assertViewHasAll([
            'albums',
            'album',
            'photos',
            'search'
        ])
            ->assertViewIs('admin.photos.index');
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_photo()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/photos?album={$this->album->titulo}&search={$this->photo2->titulo}");

        $response->assertViewHas(
            'album',
            $this->album->titulo
        )->assertViewHas(
            'search',
            $this->photo2->titulo
        )->assertViewHas(
            'photos',
            Photo::with('album')->search($this->photo2->titulo)->orderBy('fecha', 'DESC')->get()
        );
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_album_on_the_list_photo()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/photos?album={$this->album->titulo}");

        $response->assertViewHas(
            'album',
            $this->album->titulo
        )->assertViewHas(
            'photos',
            Photo::with('album')->byAlbum($this->album->titulo)->latest()->get()
        );
    }
}
