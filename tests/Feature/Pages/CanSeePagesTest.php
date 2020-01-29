<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CanSeePagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function trueble()
    {
        $this->assertTrue(true);
    }

    /** @test */
    // public function users_can_see_page_documents()
    // {
    //     $this->get(route('pages.index', 'documentos'))
    //         ->assertViewIs('pages.documentos.index')
    //         ->assertSeeText('Documentos');
    // }

    /** @test */
    // public function users_can_see_page_nosotros()
    // {
    //     $this->get(route('pages.index', 'nosotros'))
    //         ->assertViewIs('pages.nosotros.index');
    // }

    /** @test */
    // public function users_can_see_page_organigrama()
    // {
    //     $this->get(route('pages.index', 'organigrama'))
    //         ->assertViewIs('pages.organigrama.index');
    // }
}
