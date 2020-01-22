<?php

namespace Tests\Feature\Admin\Document;

use Tests\TestCase;
use App\Models\User;
use App\Models\Document;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListDocumentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_document()
    {
        $this->get(route('admin.documents.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_document()
    {

        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $document1 = factory(Document::class)->create(['created_at' => now()->subDays(1)]);
        $document2 = factory(Document::class)->create();

        $response = $this->actingAs($user)
            ->get(route('admin.documents.index'));

        $response->assertViewHas('documents', Document::latest()->get())
            ->assertViewIs('admin.documents.index')
            ->assertSee($document2->titulo);
    }
}
