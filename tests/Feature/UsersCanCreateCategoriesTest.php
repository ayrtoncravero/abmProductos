<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use phpDocumentor\Reflection\Type;
use Tests\TestCase;

class UsersCanCreateCategoriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanCreateCategoriesTest()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }
}
