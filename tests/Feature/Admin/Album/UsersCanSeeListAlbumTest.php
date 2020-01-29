<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\User;
use App\Models\Album;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListAlbumTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_album()
    {
        $this->get(route('admin.albumes.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_album()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $album1 = factory(Album::class)->create(['created_at' => now()->subDays(1)]);
        $album2 = factory(Album::class)->create();

        $response = $this->actingAs($user)
            ->get(route('admin.albumes.index'));

        $response->assertViewHasAll([
            'albums',
            'search'
        ])
            ->assertViewIs('admin.albums.index')
            ->assertSee($album2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_album()
    {
        $user = factory(User::class)->create();
        $album1 = factory(Album::class)->create(['created_at' => now()->subDays(1)]);
        $album2 = factory(Album::class)->create(['titulo' => 'album']);

        $response = $this->actingAs($user)
            ->get("/admin/albumes?search={$album2->titulo}");

        $response->assertViewHas(
            'search',
            $album2->titulo
        )->assertViewHas(
            'albums',
            Album::search($album2->titulo)->orderBy('fecha', 'DESC')->get()
        );
    }
}
