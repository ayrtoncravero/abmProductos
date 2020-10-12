<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProviderPathCreateWithPostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function ProviderPathCreateWithPostTest()
    {
        $response = $this->get(route('ProvidersController@create'));

        $response->assertStatus(200);
    }
}
