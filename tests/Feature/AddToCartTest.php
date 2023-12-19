<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;


class AddToCartTest extends TestCase
{
    public function testAddToCart()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->post('/add-to-cart/{product}', [
            'productId' => $product->id,
        ]);

        $response->assertRedirect('/cart');

    }

}
