<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FailToCreateCategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function FailToCreateCategoryTest()
    {
        $response = $this->post(route('CategoriesController@create'), []);

        $response->assertStatus(302);
    }
}
