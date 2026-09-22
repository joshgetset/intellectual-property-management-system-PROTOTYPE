<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_toggle_script_is_available(): void
    {
        $this->assertFileExists(public_path('js/login.js'));
    }

    public function test_signin_page_is_available_and_creates_a_user(): void
    {
        $response = $this->get('/signin');

        $response->assertStatus(200)
            ->assertSee('Create your account');

        $response = $this->post('/signin', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'username' => 'janedoe',
            'password' => 'secret123',
            'password_confirmation' => 'secret123',
        ]);

        $response->assertRedirect('/');

        $this->assertDatabaseHas('users', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'username' => 'janedoe',
        ]);
    }
}
