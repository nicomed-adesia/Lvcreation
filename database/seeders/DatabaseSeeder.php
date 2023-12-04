<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\inscripition;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            
        inscripition::create([
            'NomPrenom' => 'Test User',
            'email' => 'test@example.com',
            'contact' => '0123456',
            'Mdp' => '123456789',
            'imageMembre' =>'sary',
        ]);
    }
}
