<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Monolog\Handler\NewRelicHandler;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = New User;
        $user->name = 'Admin'; 
        $user->email = 'admin@test.com'; 
        $user->password = '123';
        $user->role = 'admin';
        
        
        $user->save();
    }
}
