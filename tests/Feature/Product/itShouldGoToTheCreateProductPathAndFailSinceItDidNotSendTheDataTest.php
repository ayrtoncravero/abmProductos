<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class itShouldGoToTheCreateProductPathAndFailSinceItDidNotSendTheDataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function itShouldGoToTheCreateProductPathAndFailSinceItDidNotSendTheDataTest()
    {
        $response = $this->post(route('ProductsController@create'), []);

        $response->assertStatus(302);
    }
}
