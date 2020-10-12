<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoToTheSearchPathTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoToTheSearchPathTest()
    {
        $response = $this->get(route('ProductsController@search'));

        $response->assertStatus(200);
    }
}
