<?php

namespace Tests\Feature\Admin\Announcement;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAnAnnouncementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_create_an_announcement()
    {
        $this->get(route('admin.announcements.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_form_for_create_an_announcement()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.announcements.create'))
            ->assertViewHasAll([
                'announcement',
                'grupos'
            ])
            ->assertViewIs('admin.announcements.create');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_an_announcement()
    {
        $this->post(route('admin.announcements.store'), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_create_an_announcement()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        factory(AnnouncementGroup::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData());

        $this->assertDatabaseHas('announcements', $this->formData());

        $response->assertRedirect(route('admin.announcements.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'titulo' => ''
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_grupo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'grupo_id' => ''
            ]));

        $response->assertSessionHasErrors(['grupo_id']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'titulo' => 1212
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_200_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'titulo' => Str::random(201)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_numero_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'numero' => ''
            ]));

        $response->assertSessionHasErrors(['numero']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'fecha' => ''
            ]));

        $response->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_estado_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.announcements.store'), $this->formData([
                'estado' => ''
            ]));

        $response->assertSessionHasErrors(['estado']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer announcemento',
            'numero' => '132',
            'fecha' => '2020-02-07 09:29:00',
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ], $override);
    }
}
