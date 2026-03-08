<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@boss.com',
            'role'=>'admin',
            'password'=>Hash::make('12345678'),
            
        ]);
         User::factory()->create([
            'name' => 'Editor Man',
            'email' => 'man@boss.com',
            'role'=>'editor',
            'password'=>Hash::make('12345678'),
            
        ]);
        User::factory()->create([
            'name' => 'Editor woman',
            'email' => 'woman@boss.com',
            'role'=>'editor',
            'password'=>Hash::make('12345678'),
            
        ]);
    }
}
