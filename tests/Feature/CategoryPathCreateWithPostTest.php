<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryPathCreateWithPostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function CategoryPathCreateWithPostTest()
    {
        $response = $this->get(route('CategoriesController@create'));

        $response->assertStatus(200);
    }
}
