<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cuenta de Banco
        Account::create([
            'id' => DatabaseSeeder::BANK_ACCOUNT_ID,
            'user_id' => DatabaseSeeder::BANK_ID
        ]);
        // Cuenta de Kennit
        Account::create([
            'id' => DatabaseSeeder::KENNIT_ACCOUNT_ID,
            'user_id' => DatabaseSeeder::KENNIT_ID
        ]);

        // Cuenta de Andrea
        Account::create([
            'id' => DatabaseSeeder::ANDREA_ACCOUNT_ID,
            'user_id' => DatabaseSeeder::ANDREA_ID
        ]);
    }
}
