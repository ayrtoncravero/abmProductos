<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FailsToCreateProviderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function FailsToCreateProviderTest()
    {
        $response = $this->post(route('ProvidersController@create'), []);

        $response->assertStatus(302);
    }
}
