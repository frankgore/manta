<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexAuth()
    {
        $response = $this->get('/products');
        $response->assertStatus(302);
        $response->assertLocation('/login');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)
                         ->get('/products');
        $response->assertStatus(200);
        $response->assertViewIs('products.index');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)
                         ->get('/products/create');
        $response->assertStatus(200);
        $response->assertViewIs('products.create');
    }
}
