<?php

namespace Tests\Feature\Admin\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAPostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_post()
    {
        $post = factory(Post::class)->create();
        $this->get(route('admin.posts.edit', $post))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_post()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $this->actingAs($user)
            ->get(route('admin.posts.edit', $post))
            ->assertViewIs('admin.posts.edit')
            ->assertViewHas('post', $post)
            ->assertSeeText('Editar aviso');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_post()
    {
        $post = factory(Post::class)->create();
        $this->put(route('admin.posts.update', $post), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_update_a_post()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create($this->formData());

        $response = $this->actingAs($user)
            ->put(route('admin.posts.update', $post), $this->formData());

        $this->assertDatabaseHas('avisos', $this->formData());

        $response->assertRedirect(route('admin.posts.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user)
            ->put(route('admin.posts.update', $post), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user)
            ->put(route('admin.posts.update', $post), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user)
            ->put(route('admin.posts.update', $post), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_contenido_is_required()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user)
            ->put(route('admin.posts.update', $post), $this->formData([
                'contenido' => ''
            ]))->assertSessionHasErrors(['contenido']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user)
            ->put(route('admin.posts.update', $post), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
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
