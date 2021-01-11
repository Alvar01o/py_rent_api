<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testLogin()
    {
        $response = $this->postJson('/api/login', ['email' => 'test@example.com','password'=>'password']);
        $response->assertStatus(200);
    }

}
