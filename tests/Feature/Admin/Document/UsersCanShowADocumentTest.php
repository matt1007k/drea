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

    protected $user;
    protected $document;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->document = factory(Document::class)->create();
    }

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_document()
    {
        $this->get(route('admin.documents.show', $this->document))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_show_a_document()
    {
        $this->actingAs($this->user)
            ->get(route('admin.documents.show', $this->document))
            ->assertViewIs('admin.documents.show')
            ->assertViewHas('document', $this->document)
            ->assertSee($this->document->titulo);
    }
}
