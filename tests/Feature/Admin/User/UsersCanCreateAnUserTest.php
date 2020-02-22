<?php

namespace Tests\Feature\Admin\Role;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class UsersCanCreateAnUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_an_user()
    {
        $this->get(route('admin.users.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_an_user()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.users.create'))
            ->assertViewIs('admin.users.create')
            ->assertViewHas('user', new User)
            ->assertSeeText('Registrar usuario');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_an_user()
    {
        $this->post(route('admin.users.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_an_user()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'roles' => ['admin'],
                'permissions' => [],
            ]));

        $this->assertDatabaseHas('users', [
            'name' => $this->formData()['name'],
            'email' => $this->formData()['email'],
        ]);

        $this->assertTrue(
            Hash::check('password', User::find(2)->password),
            'The password field must be hashed'
        );

        $response->assertRedirect(route('admin.users.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_name_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'name' => ''
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'name' => 121
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'name' => Str::random(101)
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_email_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'email' => ''
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'email' => 121
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_may_not_be_greater_than_150_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'email' => Str::random(151)
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_must_be_uniqued()
    {
        factory(User::class)->create(['email' => 'test@gmail.com']);
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'email' => 'test@gmail.com'
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_email_must_be_an_email_address_valid()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'email' => 'sdfdsfs'
            ]))->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function the_password_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'password' => ''
            ]))->assertSessionHasErrors(['password']);
    }

    /** @test */
    public function the_password_may_not_be_lesser_than_8_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.users.store'), $this->formData([
                'password' => Str::random(7)
            ]))->assertSessionHasErrors(['password']);
    }


    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'name' => 'Primer name',
            'email' => 'primer@email.com',
            'password' => 'password',
        ], $override);
    }
}
