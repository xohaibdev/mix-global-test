<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class ProductDetailsTest extends TestCase
{

    public function testProductDetails()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->get("/product/{$product->id}");

        $response->assertStatus(200);
        $response->assertSee($product->name);
    }
}
