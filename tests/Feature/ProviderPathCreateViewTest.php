<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProviderPathCreateViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function ProviderPathCreateViewTest()
    {
        $response = $this->get(route('ProvidersController@createView'));

        $response->assertStatus(500);
    }
}
