<?php

namespace Tests\Feature\Admin\Video;

use Tests\TestCase;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAVideoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_create_a_video()
    {
        $this->get(route('admin.videos.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_form_for_create_a_video()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.videos.create'))
            ->assertViewHas('video', new Video())
            ->assertViewIs('admin.videos.create')
            ->assertSee('Registrar video');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_a_video()
    {
        $this->post(route('admin.videos.store'), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_create_a_video()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData());

        $this->assertDatabaseHas('videos', $this->formData());

        $response->assertRedirect(route('admin.videos.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'titulo' => ''
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_video_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'video' => ''
            ]));

        $response->assertSessionHasErrors(['video']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'titulo' => 1212
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_video_must_be_a_string()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'video' => 1212
            ]));

        $response->assertSessionHasErrors(['video']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'titulo' => Str::random(101)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_video_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'video' => Str::random(101)
            ]));

        $response->assertSessionHasErrors(['video']);
    }


    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.videos.store'), $this->formData([
                'fecha' => ''
            ]));

        $response->assertSessionHasErrors(['fecha']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer videoo',
            'video' => 'videos',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true
        ], $override);
    }
}
