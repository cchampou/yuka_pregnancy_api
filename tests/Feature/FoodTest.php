<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FoodTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $ean = '0737628064502';
        $response = $this->get('/api/food/' . $ean);

        $response->assertStatus(200)->assertJson([
            "code" => $ean
        ]);
    }
}
