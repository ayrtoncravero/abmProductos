<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoToTheCreateProductRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoToThePathAndCreateOneWithTheData()
    {
        $response = $this->get(route('ProductsController@create'));

        $response->assertStatus(200);
    }
}
