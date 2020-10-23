<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoTheRouteOfCreatingProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoTheRouteOfCreatingProductsTest()
    {
        $response = $this->get(route('ProductsController@createView'));

        $response->assertStatus(200);
    }
}
