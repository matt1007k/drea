<?php

namespace Tests\Feature\Admin\Post;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersAdminCreateAPostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_post()
    {
        $this->get(route('admin.posts.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_post()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.posts.create'))
            ->assertViewIs('admin.posts.create')
            ->assertViewHas('post', new Post)
            ->assertSeeText('Registrar aviso');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_post()
    {
        $this->post(route('admin.posts.store'), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_create_post()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData());

        $this->assertDatabaseHas('avisos', $this->formData());

        $response->assertRedirect(route('admin.index'))
            ->assertSessionHas('msg', 'Registro completado');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer documento',
            'contenido' => '<h1>Mi primer descripcion</h1>',
            // 'fecha_submit' => '31/12/2019',
            'fecha' => '2019-12-31 00:00:00'
        ], $override);
    }
}
