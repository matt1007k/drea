<?php

namespace Tests\Feature\Admin\Slideshow;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowASlideshowTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $slideshow;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
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
