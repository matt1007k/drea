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
    protected $user;
    protected $album2;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
        $album1 = factory(Album::class)->create(['created_at' => now()->subDays(1)]);
        $this->album2 = factory(Album::class)->create(['titulo' => 'album']);
    }

    /** @test */
    public function guest_users_cannot_see_list_album()
    {
        $this->get(route('admin.albums.index'))
            ->assertRedirect('/auth/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_album()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->get(route('admin.albums.index'));

        $response->assertViewHasAll([
            'albums',
            'search'
        ])
            ->assertViewIs('admin.albums.index')
            ->assertSee($this->album2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_album()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/albums?search={$this->album2->titulo}");

        $response->assertViewHas(
            'search',
            $this->album2->titulo
        )->assertViewHas(
            'albums',
            Album::search($this->album2->titulo)->orderBy('fecha', 'DESC')->get()
        );
    }
}
