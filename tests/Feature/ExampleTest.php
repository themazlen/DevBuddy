<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testItShowsAMainPage(){
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testItShowsText(){
        $response = $this->get('/');

        $response->assertSee('');
    }


}
