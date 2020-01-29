<?php

namespace Tests\Feature\Admin\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAPostTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     */
    public function guest_users_cannot_delete_post()
    {
        $post = factory(Post::class)->create();
        $this->delete(route('admin.posts.destroy', $post), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_delete_a_post()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create($this->formData());

        $response = $this->actingAs($user)
            ->delete(route('admin.posts.destroy', $post), $this->formData());

        $this->assertDatabaseMissing('avisos', $this->formData());

        $response->assertRedirect(route('admin.posts.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer aviso',
            'contenido' => '<h1>Mi primer descripcion</h1>',
            'fecha' => '2019-12-31 00:00:00'
        ], $override);
    }
}
