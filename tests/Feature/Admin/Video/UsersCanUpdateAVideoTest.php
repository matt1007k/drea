<?php

namespace Tests\Feature\Admin\Video;

use Tests\TestCase;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAVideoTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $video;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->video = factory(Video::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_a_video()
    {
        $this->get(route('admin.videos.edit', $this->video))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_a_video()
    {
        $this->actingAs($this->user)
            ->get(route('admin.videos.edit', $this->video))
            ->assertViewHas('video', $this->video)
            ->assertViewIs('admin.videos.edit')
            ->assertSee('Editar video');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_video()
    {
        $this->put(route('admin.videos.update', $this->video), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_update_a_video()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData());

        $this->assertDatabaseHas('videos', $this->formData());

        $response->assertRedirect(route('admin.videos.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_video_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'video' => ''
            ]))->assertSessionHasErrors(['video']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'titulo' => 1212
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_video_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'video' => 1212
            ]))->assertSessionHasErrors(['video']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_video_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'video' => Str::random(101)
            ]))->assertSessionHasErrors(['video']);
    }


    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.videos.update', $this->video), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
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
