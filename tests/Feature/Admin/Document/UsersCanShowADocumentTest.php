<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowADocumentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_document()
    {
        $document = factory(Document::class)->create();
        $this->get(route('admin.documents.show', $document))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_show_a_document()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $document = factory(Document::class)->create();

        $this->actingAs($user)
            ->get(route('admin.documents.show', $document))
            ->assertViewIs('admin.documents.show')
            ->assertViewHas('document', $document)
            ->assertSee($document->titulo);
    }
}
