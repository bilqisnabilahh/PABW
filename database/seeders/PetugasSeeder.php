<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            User::updateOrCreate(
                ['email' => "petugas{$i}@bpbd.test"],
                [
                    'name' => $faker->name(),
                    'password' => Hash::make('Petugas123'),
                ]
            );
        }

        User::updateOrCreate(
            ['email' => 'admin@bpbd.go.id'],
            [
                'name' => 'Admin BPBD',
                'password' => Hash::make('Admin12345'),
            ]
        );
    }
}
