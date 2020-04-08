<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class VendorTest extends TestCase
{   

    /**
     * Test auth is applied.
     *
     * @return void
     */
    public function testAuth()
    {
        $response = $this->get('/vendors');
        $response->assertStatus(302);
        $response->assertLocation('/login');
    }

    /**
     * Test the vendors page returns 200 HTTP codes.
     *
     * @return void
     */
    public function testPage()
    {   

        $user = factory(User::class)->make();
        $response = $this->actingAs($user)
                         ->get('/vendors');
        $response->assertStatus(200);
        $response->assertViewIs('vendors.index');
    }
}
