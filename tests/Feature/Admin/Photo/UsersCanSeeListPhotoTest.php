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

    /** @test */
    public function guest_users_cannot_see_list_photo()
    {
        $this->get(route('admin.photos.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_photo()
    {
        $user = factory(User::class)->create();
        $photo1 = factory(Photo::class)->create(['created_at' => now()->subDays(1)]);
        $photo2 = factory(Photo::class)->create();

        $response = $this->actingAs($user)
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
        $user = factory(User::class)->create();
        $album = factory(Album::class)->create();
        $photo1 = factory(Photo::class)->create(['created_at' => now()->subDays(1), 'album_id' => $album->id]);
        $photo2 = factory(Photo::class)->create(['titulo' => 'photo', 'album_id' => $album->id]);

        $response = $this->actingAs($user)
            ->get("/admin/photos?album={$album->titulo}&search={$photo2->titulo}");

        $response->assertViewHas(
            'album',
            $album->titulo
        )->assertViewHas(
            'search',
            $photo2->titulo
        )->assertViewHas(
            'photos',
            Photo::with('album')->search($photo2->titulo)->orderBy('fecha', 'DESC')->get()
        );
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_album_on_the_list_photo()
    {
        $user = factory(User::class)->create();
        $album = factory(Album::class)->create();
        $photo1 = factory(Photo::class)->create(['album_id' => $album->id, 'created_at' => now()->subDays(1)]);
        $photo2 = factory(Photo::class)->create(['album_id' => $album->id]);

        $response = $this->actingAs($user)
            ->get("/admin/photos?album={$album->titulo}");

        $response->assertViewHas(
            'album',
            $album->titulo
        )->assertViewHas(
            'photos',
            Photo::with('album')->byAlbum($album->titulo)->latest()->get()
        );
    }
}
