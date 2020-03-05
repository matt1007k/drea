<?php

namespace Tests\Feature\Admin\Post;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanUpdateAPostTest extends TestCase
{
    use RefreshDatabase;

    protected $post;

    protected function setUp(): void
    {
        parent::setUp();

        $this->post = factory(Post::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_post()
    {
        $this->get(route('admin.posts.edit', $this->post))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_post()
    {
        $this->actingAs($this->user)
            ->get(route('admin.posts.edit', $this->post))
            ->assertViewIs('admin.posts.edit')
            ->assertViewHas('post', $this->post)
            ->assertSeeText('Editar aviso');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_post()
    {
        $this->put(route('admin.posts.update', $this->post), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_a_post()
    {
        $response = $this->actingAs($this->user)
            ->put(route('admin.posts.update', $this->post), $this->formData());

        $this->assertDatabaseHas('avisos', $this->formData());

        $response->assertRedirect(route('admin.posts.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.posts.update', $this->post), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.posts.update', $this->post), $this->formData([
                'titulo' => 121,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.posts.update', $this->post), $this->formData([
                'titulo' => Str::random(101),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_contenido_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.posts.update', $this->post), $this->formData([
                'contenido' => '',
            ]))->assertSessionHasErrors(['contenido']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.posts.update', $this->post), $this->formData([
                'fecha' => '',
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer aviso',
            'contenido' => '<h1>Mi primer descripcion</h1>',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true,
        ], $override);
    }
}
