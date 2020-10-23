<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class theCategoryPathShouldWorkTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function theCategoryPathShouldWorkTest()
    {
        $response = $this->get(route('CategoriesController@createView'));

        $response->assertStatus(200);
    }
}
