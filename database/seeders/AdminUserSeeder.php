<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@cambodiatourism.gov.kh')],
            [
                'name'     => 'Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD')),
                'is_admin' => true,
            ]
        );
    }
}
