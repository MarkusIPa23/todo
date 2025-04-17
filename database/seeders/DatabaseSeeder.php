<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToDo; // Importē ToDo modeli

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Aizkomentē vai dzēs User::factory(...) ja tas tur ir
        // \App\Models\User::factory(10)->create();

        // Dēstījam 10 uzdevumus
        ToDo::factory()->count(10)->create();
    }
}
