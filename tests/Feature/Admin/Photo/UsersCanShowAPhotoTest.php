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

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_photo()
    {
        $photo = factory(Photo::class)->create();
        $this->get(route('admin.photos.show', $photo))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_photo()
    {
        $user = factory(User::class)->create();
        $photo = factory(Photo::class)->create();

        $this->actingAs($user)
            ->get(route('admin.photos.show', $photo))
            ->assertViewIs('admin.photos.show')
            ->assertViewHas('photo', $photo)
            ->assertSeeText($photo->titulo);
    }
}
