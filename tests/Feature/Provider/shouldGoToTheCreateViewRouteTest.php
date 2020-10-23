<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoToTheCreateViewRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoToTheCreateViewRouteTest()
    {
        $response = $this->get(route('ProvidersController@createView'));

        $response->assertStatus(200);
    }
}
