<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meter;
use App\Models\Metter;
use Illuminate\Support\Carbon;

class MeterSeeder extends Seeder
{
    public function run(): void
    {
        $meters = [
            [
                'serial_number' => 'MT-10001',
                'status' => 'active',
                'owner_name' => 'Abdelkader Cherifi',
                'installed_at' => '2023-05-10',
                'last_consumption' => 132.4,
            ],
            [
                'serial_number' => 'MT-10002',
                'status' => 'inactive',
                'owner_name' => 'Salim Bouabdellah',
                'installed_at' => '2023-08-21',
                'last_consumption' => 0.0,
            ],
            [
                'serial_number' => 'MT-10003',
                'status' => 'active',
                'owner_name' => 'Laila Benmehidi',
                'installed_at' => '2022-12-02',
                'last_consumption' => 289.7,
            ],
            [
                'serial_number' => 'MT-10004',
                'status' => 'inactive',
                'owner_name' => 'Kamel Belkacem',
                'installed_at' => '2024-03-15',
                'last_consumption' => 14.2,
            ],
            [
                'serial_number' => 'MT-10005',
                'status' => 'active',
                'owner_name' => 'Souha Djeraji',
                'installed_at' => '2024-11-01',
                'last_consumption' => 78.9,
            ],
        ];

        foreach ($meters as $meter) {
            Metter::create([
                'serial_number' => $meter['serial_number'],
                'status' => $meter['status'],
                'owner_name' => $meter['owner_name'],
                'installed_at' => Carbon::parse($meter['installed_at']),
                'last_consumption' => $meter['last_consumption'],
            ]);
        }
    }
}
