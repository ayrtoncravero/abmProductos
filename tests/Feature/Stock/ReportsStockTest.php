<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportsStockTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function ReportsStockTest()
    {
        $response = $this->get(route('ReportsController@stock'));

        $response->assertStatus(200);
    }
}
