<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreatingAProviderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function CreatingAProviderTest()
    {
        $this->post(route('ProvidersController@create'), [
            'code' => '123456',
            'name' => 'Pepito',
            'description' => 'Es buena gente',
        ])->assertRedirect(route('ProvidersController@index'));

        $this->assertDatabaseHas('providers', [
            'code' => '123456',
            'name' => 'Pepito',
            'description' => 'Es buena gente',
        ]);
    }
}
