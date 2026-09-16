<?php

namespace Database\Seeders;

use App\Models\Cool;
use App\Models\CoolGembala;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoolGembalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assignments = [
            'COOL-JKT' => 'gembala.jakarta',
            'COOL-BDG' => 'gembala.bandung',
            'COOL-SBY' => 'gembala.surabaya',
        ];

        foreach ($assignments as $coolCode => $username) {
            $cool = Cool::where('code', $coolCode)->firstOrFail();
            $user = User::where('username', $username)->firstOrFail();

            CoolGembala::create([
                'cool_id' => $cool->id,
                'user_id' => $user->id,
                'started_at' => now()->toDateString(),
                'ended_at' => null,
                'status' => 'ACTIVE',
            ]);
        }
    }
}
