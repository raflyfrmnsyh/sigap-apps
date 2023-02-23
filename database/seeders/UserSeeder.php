<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Alexander Saep',
            'username' => 'Admin',
            'password' => Hash::make('admin'),
            // 'gender' => 'pria',
            'role_id' => 1,
        ]);
    }
}
