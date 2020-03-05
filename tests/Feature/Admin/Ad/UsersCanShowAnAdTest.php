<?php

namespace Tests\Feature\Admin\Ad;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersCanShowAnAdTest extends TestCase
{
    use RefreshDatabase;

    protected $ad;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ad = factory(Ad::class)->create();
    }

    /**
     * @test
     */
    public function guest_cannot_see_form_show_an_ad()
    {
        $this->get(route('admin.ads.show', $this->ad))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_an_ad()
    {
        $this->actingAs($this->user)
            ->get(route('admin.ads.show', $this->ad))
            ->assertViewIs('admin.ads.show')
            ->assertViewHas('ad', $this->ad)
            ->assertSeeText('Detalle del anuncio');
    }
}
