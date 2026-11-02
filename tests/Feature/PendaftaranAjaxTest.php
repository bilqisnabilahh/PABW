<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Modules\Pendaftaran\Models\Daftar;

test('user dapat mengambil data pendaftaran via JSON', function () {
    $user = User::factory()->create();
    Daftar::factory()->count(3)->create();

    $response = $this->actingAs($user)->getJson('/pendaftaran/data');
    $response->assertStatus(200)->assertJsonCount(3);
});

test('user dapat menambah pendaftar baru beserta upload berkas via AJAX', function () {
    Storage::fake('public');
    $user = User::factory()->create();

    $file = UploadedFile::fake()->create('dokumen.pdf', 500, 'application/pdf');

    $response = $this->actingAs($user)->postJson('/pendaftaran', [
        'nama' => 'Budi Santoso',
        'asal_sekolah' => 'SMA Negeri 1 Bandung',
        'prodi_tujuan' => 'Informatika',
        'email' => 'budi@example.com',
        'no_hp' => '081234567890',
        'berkas' => $file,
    ]);

    $response->assertStatus(200)->assertJson(['success' => 'Data berhasil disimpan.']);
    $this->assertDatabaseHas('daftars', ['email' => 'budi@example.com']);
});