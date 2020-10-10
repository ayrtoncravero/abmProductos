<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryPathCreateViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function CategoryPathCreateViewTest()
    {
        $response = $this->get(route('CategoriesController@createView'));

        $response->assertStatus(200);
    }
}
