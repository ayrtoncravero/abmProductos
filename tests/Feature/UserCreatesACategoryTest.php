<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCreatesACategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UserCreatesACategoryTest()
    {
        $response = $this->postJson('/categories/new', ['name' => 'Ayrton']);
        $response
            ->assertStatus(500)
            ->assertJson([
                'created' => true,
            ]);
    }
}
