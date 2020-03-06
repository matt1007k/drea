<?php

namespace Tests\Feature\Admin\menu;

use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersCanSeeListSlideshowTest extends TestCase
{
    use RefreshDatabase;

    protected $slideshow2;

    protected function setUp(): void
    {
        parent::setUp();

        $slideshow1 = factory(Slideshow::class)->create(['created_at' => now()->subDays(1)]);
        $this->slideshow2 = factory(Slideshow::class)->create(['titulo' => 'slideshow']);
    }

    /** @test */
    public function guest_users_cannot_see_list_slideshow()
    {
        $this->get(route('admin.slideshows.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_slideshow()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.slideshows.index'));

        $response->assertViewHasAll([
            'slideshows',
            'search',
        ])
            ->assertViewIs('admin.slideshows.index')
            ->assertSee($this->slideshow2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_slideshow()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/slideshows?search={$this->slideshow2->titulo}");

        $response->assertViewHas(
            'search',
            $this->slideshow2->titulo
        )->assertViewHas(
            'slideshows',
            Slideshow::search($this->slideshow2->titulo)->orderLatestDate()->get()
        );
    }
}
