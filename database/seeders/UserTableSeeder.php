<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Robinson Andres Cortes',
            'password' => Hash::make('password'),
            'email' => 'robinson@gmail.com',
        ]);
        $user = User::create([
            'name' => 'Usuario test1',
            'password' => Hash::make('password'),
            'email' => 'test@gmail.com',
        ]);
    }
}
