<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class CheckoutTest extends TestCase
{

    public function testCheckout()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->post('/add-to-cart/{product}', [
            'productId' => $product->id,
        ]);

        $response = $this->actingAs($user)->post('/checkout');

        $response->assertRedirect('/order/success');

    }
}
