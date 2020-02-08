<?php

namespace Tests\Feature\Admin\Announcement;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAnAnnouncementTest extends TestCase
{
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp();
        factory(AnnouncementGroup::class)->create();
        factory(Announcement::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_an_announcement()
    {
        $this->get(route('admin.announcements.edit', Announcement::first()))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_an_announcement()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.announcements.edit', Announcement::first()))
            ->assertViewHasAll([
                'announcement',
                'grupos'
            ])
            ->assertViewIs('admin.announcements.edit');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_an_announcement()
    {
        $this->put(route('admin.announcements.update', Announcement::first()), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_update_an_announcement()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData());

        $this->assertDatabaseHas('announcements', $this->formData());

        $response->assertRedirect(route('admin.announcements.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'titulo' => ''
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_grupo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'grupo_id' => ''
            ]));

        $response->assertSessionHasErrors(['grupo_id']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'titulo' => 1212
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_200_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'titulo' => Str::random(201)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_numero_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'numero' => ''
            ]));

        $response->assertSessionHasErrors(['numero']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
                'fecha' => ''
            ]));

        $response->assertSessionHasErrors(['fecha']);
    }

    /** @test */
    public function the_estado_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.announcements.update', Announcement::first()), $this->formData([
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
