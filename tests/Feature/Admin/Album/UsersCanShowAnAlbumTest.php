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

class UsersCanShowAnAlbumTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_album()
    {
        $album = factory(Album::class)->create();
        $this->get(route('admin.albums.show', $album))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_album()
    {
        $user = factory(User::class)->create();
        $album = factory(Album::class)->create();

        $this->actingAs($user)
            ->get(route('admin.albums.show', $album))
            ->assertViewIs('admin.albums.show')
            ->assertViewHas('album', $album)
            ->assertSeeText($album->titulo);
    }
}
