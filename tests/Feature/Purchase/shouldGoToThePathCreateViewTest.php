<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoToThePathCreateViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoToThePathCreateViewTest()
    {
        $response = $this->get(route('PurchasesController@createView'));

        $response->assertStatus(200);
    }
}
