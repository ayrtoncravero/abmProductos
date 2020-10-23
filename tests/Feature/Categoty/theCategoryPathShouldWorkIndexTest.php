<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class theCategoryPathShouldWorkIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function theCategoryPathShouldWorkIndexTest()
    {
        $response = $this->get(route('CategoriesController@index'));

        $response->assertStatus(200);
    }
}
