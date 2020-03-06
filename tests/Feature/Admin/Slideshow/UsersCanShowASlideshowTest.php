<?php

namespace Tests\Feature\Admin\Slideshow;

use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersCanShowASlideshowTest extends TestCase
{
    use RefreshDatabase;

    protected $slideshow;

    protected function setUp(): void
    {
        parent::setUp();

        $this->slideshow = factory(Slideshow::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_slideshow()
    {
        $this->get(route('admin.slideshows.show', $this->slideshow))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_slideshow()
    {
        $this->actingAs($this->user)
            ->get(route('admin.slideshows.show', $this->slideshow))
            ->assertViewIs('admin.slideshows.show')
            ->assertViewHas('slideshow', $this->slideshow)
            ->assertSeeText('Detalle del slideshow');
    }
}
