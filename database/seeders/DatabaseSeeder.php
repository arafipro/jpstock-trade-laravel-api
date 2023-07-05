<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MarketSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(TradeSeeder::class);
    }
}
