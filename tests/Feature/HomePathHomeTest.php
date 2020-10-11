<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePathHomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function HomePathHomeTest()
    {
        $response = $this->get(route('HomeController@home'));

        $response->assertStatus(200);
    }
}
