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

    protected $user;
    protected $video;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->video = factory(Video::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_a_video()
    {
        $this->delete(route('admin.videos.destroy', $this->video), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_delete_a_video()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.videos.destroy', $this->video));

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
