<?php

use App\Models\User;

test('guest ditolak saat mengakses dashboard dan diarahkan ke login', function () {
    $response = $this->get('/dashboard');
    $response->assertRedirect('/login');
});

test('user biasa tidak dapat mengakses modul usermanagement dan menerima status 403', function () {
    $user = User::factory()->create(['role' => 'user']);

    $response = $this->actingAs($user)->get('/admin/users');
    $response->assertStatus(403);
});

test('admin dapat mengakses modul usermanagement', function () {
    $admin = User::factory()->admin()->create();

    $response = $this->actingAs($admin)->get('/admin/users');
    $response->assertStatus(200);
});