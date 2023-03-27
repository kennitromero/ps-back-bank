<?php

namespace Database\Seeders;

use App\Models\Transfer;
use Illuminate\Database\Seeder;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Depósito Inicial ($100 millones)
        Transfer::create([
            'account_origin_id' => null,
            'account_destination_id' => DatabaseSeeder::BANK_ACCOUNT_ID,
            'amount' => 100_000_000,
            'type' => 'deposit',
        ]);

        // Depósito de Banco a Kennit ($35.6 millones)
        Transfer::create([
            'account_origin_id' => DatabaseSeeder::BANK_ACCOUNT_ID,
            'account_destination_id' => DatabaseSeeder::KENNIT_ACCOUNT_ID,
            'amount' => 35_600_000,
            'type' => 'deposit',
        ]);

        // Retiro de Kennit a Banco ($35.6 millones)
        Transfer::create([
            'account_origin_id' => DatabaseSeeder::KENNIT_ACCOUNT_ID,
            'account_destination_id' => DatabaseSeeder::BANK_ACCOUNT_ID,
            'amount' => 35_600_000,
            'type' => 'withdrawal',
        ]);

        Transfer::create([
            'account_origin_id' => DatabaseSeeder::KENNIT_ACCOUNT_ID,
            'account_destination_id' => DatabaseSeeder::ANDREA_ACCOUNT_ID,
            'amount' => 15_600_000,
            'type' => 'deposit',
        ]);

        Transfer::create([
            'account_origin_id' => DatabaseSeeder::ANDREA_ACCOUNT_ID,
            'account_destination_id' => DatabaseSeeder::KENNIT_ACCOUNT_ID,
            'amount' => 15_600_000,
            'type' => 'withdrawal',
        ]);
    }
}
