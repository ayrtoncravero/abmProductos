<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductPathIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function ProductPathIndexTest()
    {
        $response = $this->get(route('ProductsController@createView'));

        $response->assertStatus(500);
    }
}
