<?php

namespace Tests\Feature\Admin\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAPostTest extends TestCase
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
    public function users_admin_can_create_a_post()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData());

        $this->assertDatabaseHas('avisos', $this->formData());

        $response->assertRedirect(route('admin.posts.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData([
                'titulo' => 121
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData([
                'titulo' => Str::random(101)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_contenido_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData([
                'contenido' => ''
            ]))->assertSessionHasErrors(['contenido']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.posts.store'), $this->formData([
                'fecha' => ''
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'slug' => 'mi-primer-aviso',
            'titulo' => 'Mi primer aviso',
            'contenido' => '<h1>Mi primer descripcion</h1>',
            // 'fecha_submit' => '31/12/2019',
            'fecha' => '2019-12-31 00:00:00'
        ], $override);
    }
}
