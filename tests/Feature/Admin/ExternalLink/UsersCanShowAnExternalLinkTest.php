<?php

namespace Tests\Feature\Admin\ExternalLink;

use App\Models\ExternalLink;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAExternalLinkTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $external_link;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->external_link = factory(ExternalLink::class)->create();
    }

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_external_link()
    {
        $this->get(route('admin.external_links.show', $this->external_link))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_show_a_external_link()
    {
        $this->actingAs($this->user)
            ->get(route('admin.external_links.show', $this->external_link))
            ->assertViewIs('admin.external_links.show')
            ->assertViewHas('external_link', $this->external_link);
    }
}
