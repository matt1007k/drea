<?php

namespace Tests\Feature\Admin\ExternalLink;

use Tests\TestCase;
use App\Models\User;
use App\Models\ExternalLink;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListExternalLinkTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $external_link2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $external_link1 = factory(ExternalLink::class)->create(['created_at' => now()->subDays(1)]);
        $this->external_link2 = factory(ExternalLink::class)->create(['url' => 'external_linko']);
    }
    /** @test */
    public function guest_users_cannot_see_list_external_link()
    {
        $this->get(route('admin.external_links.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_external_link()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.external_links.index'));

        $response->assertViewHasAll([
            'external_links',
            'search'
        ])
            ->assertViewIs('admin.external_links.index');
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_external_link()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/external_links?search={$this->external_link2->url}");

        $response->assertViewHas(
            'search',
            $this->external_link2->url
        )->assertViewHas(
            'external_links',
            ExternalLink::search($this->external_link2->url)->latest()->get()
        );
    }
}
