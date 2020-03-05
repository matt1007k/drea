<?php

namespace Tests\Feature\Admin\Ad;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersCanCreateAnAdTest extends TestCase
{
  use RefreshDatabase;
  
    /**
     * @test 
     */
    public function guest_cannot_see_form_create_an_ad()
    {
      $this->withoutExceptionHandling();
      $this->get(route('admin.ads.create'))
	->assertRedirect($this->pathLogin);
    }
}
