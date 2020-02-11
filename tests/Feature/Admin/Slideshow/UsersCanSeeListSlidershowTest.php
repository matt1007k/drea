<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\User;
use App\Models\Slideshow;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListSlideshowTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_slideshow()
    {
        $this->get(route('admin.slideshows.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_slideshow()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $slideshow1 = factory(Slideshow::class)->create(['created_at' => now()->subDays(1)]);
        $slideshow2 = factory(Slideshow::class)->create();

        $response = $this->actingAs($user)
            ->get(route('admin.slideshows.index'));

        $response->assertViewHasAll([
            'slideshows',
            'search'
        ])
            ->assertViewIs('admin.slideshows.index')
            ->assertSee($slideshow2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_slideshow()
    {
        $user = factory(User::class)->create();
        $slideshow1 = factory(Slideshow::class)->create(['created_at' => now()->subDays(1)]);
        $slideshow2 = factory(Slideshow::class)->create(['titulo' => 'slideshow']);

        $response = $this->actingAs($user)
            ->get("/admin/slideshows?search={$slideshow2->titulo}");

        $response->assertViewHas(
            'search',
            $slideshow2->titulo
        )->assertViewHas(
            'slideshows',
            Slideshow::search($slideshow2->titulo)->orderBy('fecha', 'DESC')->get()
        );
    }
}
