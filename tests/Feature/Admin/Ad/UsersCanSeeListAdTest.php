<?php

namespace Tests\Feature\Admin\menu;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersCanSeeListAdTest extends TestCase
{
    use RefreshDatabase;
    protected $user;
    protected $ad2;

    protected function setUp(): void
    {
        parent::setUp();

        $ad1 = factory(Ad::class)->create(['created_at' => now()->subDays(1)]);
        $this->ad2 = factory(Ad::class)->create(['titulo' => 'ad']);
    }

    /** @test */
    public function guest_users_cannot_see_list_ad()
    {
        $this->get(route('admin.ads.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_ad()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->get(route('admin.ads.index'));

        $response->assertViewHasAll([
            'ads',
        ])
            ->assertViewIs('admin.ads.index')
            ->assertSee($this->ad2->titulo);
    }
}
