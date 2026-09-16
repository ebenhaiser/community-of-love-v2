<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Role::where('code', 'MASTER')->firstOrFail();
        $gembala = Role::where('code', 'GEMBALA_COOL')->firstOrFail();

        User::updateOrCreate(
            ['username' => 'master'],
            [
                'role_id' => $master->id,
                'name' => 'Administrator',
                'email' => 'master@gbisalemba.org',
                'password' => 'password',
                'phone' => null,
                'status' => 'ACTIVE',
            ]
        );

        User::updateOrCreate(
            ['username' => 'gembala.jakarta'],
            [
                'role_id' => $gembala->id,
                'name' => 'Gembala COOL Jakarta',
                'email' => 'gembala.jakarta@gbisalemba.org',
                'password' => 'password',
                'phone' => null,
                'status' => 'ACTIVE',
            ]
        );

        User::updateOrCreate(
            ['username' => 'gembala.bandung'],
            [
                'role_id' => $gembala->id,
                'name' => 'Gembala COOL Bandung',
                'email' => 'gembala.bandung@gbisalemba.org',
                'password' => 'password',
                'phone' => null,
                'status' => 'ACTIVE',
            ]
        );

        User::updateOrCreate(
            ['username' => 'gembala.surabaya'],
            [
                'role_id' => $gembala->id,
                'name' => 'Gembala COOL Surabaya',
                'email' => 'gembala.surabaya@gbisalemba.org',
                'password' => 'password',
                'phone' => null,
                'status' => 'ACTIVE',
            ]
        );
    }
}
