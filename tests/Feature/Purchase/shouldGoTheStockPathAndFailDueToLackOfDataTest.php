<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shouldGoTheStockPathAndFailDueToLackOfDataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function shouldGoTheStockPathAndFailDueToLackOfDataTest()
    {
        $response = $this->post(route('PurchasesController@stock'), []);

        $response->assertStatus(302);
    }
}
