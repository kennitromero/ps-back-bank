<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Transfer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public const BANK_ID = 4536;
    public const KENNIT_ID = 375;
    public const ANDREA_ID = 422;

    public const BANK_ACCOUNT_ID = 948;
    public const KENNIT_ACCOUNT_ID = 9931;
    public const ANDREA_ACCOUNT_ID = 312;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(TransferSeeder::class);
    }
}
