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

    protected $user;
    protected $album;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->album = factory(Album::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_album()
    {
        $this->get(route('admin.albums.show', $this->album))
            ->assertRedirect('/auth/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_album()
    {
        $this->actingAs($this->user)
            ->get(route('admin.albums.show', $this->album))
            ->assertViewIs('admin.albums.show')
            ->assertViewHas('album', $this->album)
            ->assertSeeText($this->album->titulo);
    }
}
