<?php

namespace Database\Seeders;

use App\Models\Cool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cool::create([
            'name' => 'Cool Jakarta',
            'code' => 'COOL-JKT',
            'description' => 'Cool Jakarta',
            'address' => 'Jakarta',
            'status' => 'ACTIVE',
        ]);

        Cool::create([
            'name' => 'Cool Bandung',
            'code' => 'COOL-BDG',
            'description' => 'Cool Bandung',
            'address' => 'Bandung',
            'status' => 'ACTIVE',
        ]);

        Cool::create([
            'name' => 'Cool Surabaya',
            'code' => 'COOL-SBY',
            'description' => 'Cool Surabaya',
            'address' => 'Surabaya',
            'status' => 'ACTIVE',
        ]);
    }
}
