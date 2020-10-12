<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoToTheIndexPathTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoToTheIndexPathTest()
    {
        $response = $this->get(route('ProductsController@index'));

        $response->assertStatus(200);
    }
}
