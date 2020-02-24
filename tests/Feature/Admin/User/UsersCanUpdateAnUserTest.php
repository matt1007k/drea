<?php

namespace Tests\Feature\Admin\User;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAnUserTest extends TestCase
{
    use RefreshDatabase;

    protected $user2;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user2 = factory(User::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_an_user()
    {
        $this->get(route('admin.users.edit', $this->user2))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_an_user()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.users.edit', $this->user2))
            ->assertViewIs('admin.users.edit')
            ->assertViewHasAll([
                'user',
                'roles'
            ])
            ->assertSeeText('Editar usuario');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_an_user()
    {
        $this->put(route('admin.users.update', $this->user2), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_an_user()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'roles' => ['admin'],
            ]));

        $this->assertDatabaseHas('users', $this->formData());

        $response->assertRedirect(route('admin.users.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_name_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'name' => ''
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'name' => 121
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'name' => Str::random(101)
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_email_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'email' => ''
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_must_be_uniqued()
    {
        factory(User::class)->create(['email' => 'test@gmail.com']);
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'email' => 'test@gmail.com'
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'email' => 121
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_may_not_be_greater_than_150_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'email' => Str::random(151)
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_must_be_an_email_address_valid()
    {
        $this->actingAs($this->user)
            ->put(route('admin.users.update', $this->user2), $this->formData([
                'email' => 'sdfdsfs'
            ]))->assertSessionHasErrors(['email']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'name' => 'Primer name',
            'email' => 'primer@email.com',
        ], $override);
    }
}
