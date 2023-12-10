<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Foundation\Auth\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);*/

        $user = new User();

        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123456789');

        $user->save();

    }
}
