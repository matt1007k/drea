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

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_external_link()
    {
        $external_link = factory(ExternalLink::class)->create();
        $this->get(route('admin.external_links.show', $external_link))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_show_a_external_link()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->get(route('admin.external_links.show', $external_link))
            ->assertViewIs('admin.external_links.show')
            ->assertViewHas('external_link', $external_link);
    }
}
