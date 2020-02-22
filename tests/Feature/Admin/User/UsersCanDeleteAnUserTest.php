<?php

namespace Tests\Feature\Admin\User;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAnUserTest extends TestCase
{
    use RefreshDatabase;

    protected $user2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user2 = factory(User::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_an_user()
    {
        $this->delete(route('admin.users.destroy', $this->user2), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_delete_an_user()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.users.destroy', $this->user2), $this->formData());

        $this->assertDatabaseMissing('users', $this->formData());

        $response->assertRedirect(route('admin.users.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
