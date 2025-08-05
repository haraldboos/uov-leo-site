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
          ['email' => 'leoclubuov@vau.ac.lk'],
            [
                'name' => 'Leo Club Admin',
                'password' => Hash::make('adminleoadmin'),
                'is_admin' => true,
            ]

            );
    }
}
