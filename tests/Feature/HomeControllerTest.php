<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Auth_ser(): void
    {
        $this->actingAs(User::factory()->create());
        $response = $this->get(route("home"));
        $response->assertStatus(200);
        $response->assertViewIs("home");
    }
}
