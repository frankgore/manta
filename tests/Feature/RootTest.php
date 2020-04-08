<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RootTest extends TestCase
{
    /**
     * Test the Root Route.
     *
     * @return void
     */
    public function testRootRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
        $response->assertLocation('/login');
    }
}
