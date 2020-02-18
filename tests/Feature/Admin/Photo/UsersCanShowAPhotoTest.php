<?php

namespace Tests\Feature\Admin\Photo;

use Tests\TestCase;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAPhotoTest extends TestCase
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
        $this->photo = factory(Photo::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_photo()
    {
        $this->get(route('admin.photos.show', $this->photo))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_photo()
    {
        $this->actingAs($this->user)
            ->get(route('admin.photos.show', $this->photo))
            ->assertViewIs('admin.photos.show')
            ->assertViewHas('photo', $this->photo)
            ->assertSeeText($this->photo->titulo);
    }
}
