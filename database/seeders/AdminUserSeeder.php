<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //
        User::updateOrCreate(
    ['email' => env('LEO_ADMIN_EMAIL')],
    [
        'name' => env('LEO_ADMIN_NAME'),
        'password' => Hash::make(env('LEO_ADMIN_PASSWORD')),
        'is_admin' => true,
    ]
            );
    }
}
