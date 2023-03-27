<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cuenta del Banco
        User::create([
            'id' => DatabaseSeeder::BANK_ID,
            'full_name' => 'Banco',
            'email' => 'b@sjo.com'
        ]);

        // Cuenta de Kennit
        User::create([
            'id' => DatabaseSeeder::KENNIT_ID,
            'full_name' => 'Kennit Ruz',
            'email' => 'kennitromero@gmail.com'
        ]);

        // Cuenta de Andrea
        User::create([
            'id' => DatabaseSeeder::ANDREA_ID,
            'full_name' => 'Andrea',
            'email' => 'aestradamey@gmail.com'
        ]);
    }
}
