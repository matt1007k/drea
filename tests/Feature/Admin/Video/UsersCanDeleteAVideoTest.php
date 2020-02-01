<?php

namespace Tests\Feature\Admin\Video;

use Tests\TestCase;
use App\Models\User;
use App\Models\Video;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAVideoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function guest_users_cannot_delete_a_video()
    {
        $video = factory(Video::class)->create();
        $this->delete(route('admin.videos.destroy', $video), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_delete_a_video()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $video = factory(Video::class)->create($this->formData());

        $response = $this->actingAs($user)
            ->delete(route('admin.videos.destroy', $video), $this->formData());

        $this->assertDatabaseMissing('videos', $this->formData());

        $response->assertRedirect(route('admin.videos.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
