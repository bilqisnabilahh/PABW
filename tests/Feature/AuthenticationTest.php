<?php

use App\Models\User;

test('halaman login dapat dibuka oleh guest', function () {
    $response = $this->get('/login');
    $response->assertStatus(200);
});

test('user dapat login dengan kredensial yang benar', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password123'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password123',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect('/dashboard');
});

test('user tidak dapat login dengan password salah', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password123'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});