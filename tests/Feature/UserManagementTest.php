<?php

use App\Models\User;

test('admin dapat menambah user baru', function () {
    $admin = User::factory()->admin()->create();

    $response = $this->actingAs($admin)->post('/admin/users', [
        'name' => 'User Baru',
        'email' => 'userbaru@example.com',
        'role' => 'user',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ]);

    $response->assertRedirect('/admin/users');
    $this->assertDatabaseHas('users', ['email' => 'userbaru@example.com']);
});

test('admin tidak dapat menghapus akunnya sendiri', function () {
    $admin = User::factory()->admin()->create();

    $response = $this->actingAs($admin)->delete("/admin/users/{$admin->id}");
    $response->assertSessionHas('error');
    $this->assertDatabaseHas('users', ['id' => $admin->id]);
});