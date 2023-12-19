<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class UserAuthTest extends TestCase
{
    public function testUserRegistrationAndLogin()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect('/products');

        $this->assertAuthenticated();

        $user = User::first();
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('john@example.com', $user->email);

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/products');

        $this->assertAuthenticated();
    }
}
