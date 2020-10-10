<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProviderPathIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function ProviderPathIndexTest()
    {
        $response = $this->get(route('ProvidersController@index'));

        $response->assertStatus(200);
    }
}
