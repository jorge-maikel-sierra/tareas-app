<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primero verifica si el usuario ya existe
        if (!DB::table('users')->where('email', 'john@example.com')->exists()) {
            // Si no existe, inserta el nuevo usuario
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'john@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }
        
        // Alternativamente, si realmente quieres truncar la tabla:
        // DB::table('users')->truncate();
        // DB::table('users')->insert([...]);
    }
}