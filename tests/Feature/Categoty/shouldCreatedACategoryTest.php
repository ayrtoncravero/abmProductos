<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldCreatedACategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldCreatedACategoryTest()
    {
        $this->post(route('CategoriesController@create'), [
            'name' => 'Pepito',
            'description' => 'Es buena gente',
        ])->assertRedirect(route('CategoriesController@index'));

        $this->assertDatabaseHas('categories', [
            'name' => 'Pepito',
            'description' => 'Es buena gente',
        ]);
    }
}
