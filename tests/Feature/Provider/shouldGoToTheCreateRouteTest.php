<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoToTheCreateRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoToTheCreateRouteTest()
    {
        $response = $this->get(route('ProvidersController@create'));

        $response->assertStatus(200);
    }
}
