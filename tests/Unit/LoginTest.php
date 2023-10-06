<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_user_login(): void
    {
      $user = User::first();
      $hasUser = $user ? true : false;
      $this->assertTrue($hasUser);
      $response = $this->actingAs($user)->get('/dashboard');
      $response->assertSee('Test Dashboard');
    }
}
