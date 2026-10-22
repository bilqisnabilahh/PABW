<?php

namespace Database\Seeders;

use App\Models\laporbanjir as Laporan;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $lokasi = [
            'Dayeuhkolot',
            'Baleendah',
            'Bojongsoang',
            'Rancaekek',
            'Majalaya',
        ];

        $tinggiAwal = [
            $faker->numberBetween(10, 49),
            $faker->numberBetween(50, 99),
            $faker->numberBetween(100, 150),
        ];

        for ($i = 0; $i < 15; $i++) {
            Laporan::create([
                'nama_pelapor' => $faker->name(),
                'lokasi' => $faker->randomElement($lokasi),
                'tinggi_genangan' => $tinggiAwal[$i] ?? $faker->numberBetween(10, 150),
                'tanggal_kejadian' => $faker->dateTimeBetween(
                    Carbon::now()->subMonth(),
                    Carbon::now(),
                )->format('Y-m-d'),
            ]);
        }
    }
}