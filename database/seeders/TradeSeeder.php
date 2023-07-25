<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trades')->insert([
            'code' => 2802,
            'buy_sell' => '買',
            'shares' => 3,
            'price' => 4894,
            'trading_date' => '20230420',
            'credit_ratio' => 0.86,
            'lender_ratio' => 0.32,
            'company_id' => 2,
            'per' => 30.65,
            'pbr' => 3.84,
        ]);
        DB::table('trades')->insert([
            'code' => 2802,
            'buy_sell' => '買',
            'shares' => 2,
            'price' => 5738,
            'trading_date' => '20230607',
            'credit_ratio' => 0.86,
            'lender_ratio' => 0.32,
            'company_id' => 2,
            'per' => 30.65,
            'pbr' => 3.84,
        ]);
        DB::table('trades')->insert([
            'code' => 2802,
            'buy_sell' => '買',
            'shares' => 2,
            'price' => 5668,
            'trading_date' => '20230627',
            'credit_ratio' => 0.86,
            'lender_ratio' => 0.32,
            'company_id' => 2,
            'per' => 30.65,
            'pbr' => 3.84,
        ]);
        DB::table('trades')->insert([
            'code' => 2802,
            'buy_sell' => '買',
            'shares' => 2,
            'price' => 5461,
            'trading_date' => '20230711',
            'credit_ratio' => 0.86,
            'lender_ratio' => 0.32,
            'company_id' => 2,
            'per' => 30.65,
            'pbr' => 3.84,
        ]);
        DB::table('trades')->insert([
            'code' => 4661,
            'buy_sell' => '買',
            'shares' => 3,
            'price' => 4825,
            'trading_date' => '20230428',
            'credit_ratio' => 0.95,
            'lender_ratio' => 0.67,
            'company_id' => 2,
            'per' => 98.95,
            'pbr' => 10.70,
        ]);
        DB::table('trades')->insert([
            'code' => 4661,
            'buy_sell' => '買',
            'shares' => 2,
            'price' => 5461,
            'trading_date' => '20230616',
            'credit_ratio' => 0.95,
            'lender_ratio' => 0.67,
            'company_id' => 2,
            'per' => 98.95,
            'pbr' => 10.70,
        ]);
        DB::table('trades')->insert([
                'code' => 9107,
                'buy_sell' => '買',
                'shares' => 3,
                'price' => 3569,
                'trading_date' => '2023/06/29',
                'credit_ratio' => 0.39,
                'lender_ratio' => 0.01,
                'company_id' => 2,
                'per' => 8.74,
                'pbr' => 0.69,
            ]);
        DB::table('trades')->insert([
            'code' => 9107,
            'buy_sell' => '買',
            'shares' => 3,
            'price' => 3826,
            'trading_date' => '2023/07/10',
            'credit_ratio' => 0.39,
            'lender_ratio' => 0.01,
            'company_id' => 2,
            'per' => 8.74,
            'pbr' => 0.69,
        ]);
        DB::table('trades')->insert([
            'code' => 9107,
            'buy_sell' => '買',
            'shares' => 4,
            'price' => 3365,
            'trading_date' => '23/05/09',
            'credit_ratio' => 0.39,
            'lender_ratio' => 0.01,
            'company_id' => 1,
            'per' => 8.74,
            'pbr' => 0.69,
        ]);
        DB::table('trades')->insert([
            'code' => 9107,
            'buy_sell' => '買',
            'shares' => 4,
            'price' => 3108,
            'trading_date' => '23/05/17',
            'credit_ratio' => 0.39,
            'lender_ratio' => 0.01,
            'company_id' => 1,
            'per' => 8.74,
            'pbr' => 0.69,
        ]);
        DB::table('trades')->insert([
            'code' => 9107,
            'buy_sell' => '売',
            'shares' => 4,
            'price' => 3685,
            'trading_date' => '23/06/27',
            'credit_ratio' => 0.39,
            'lender_ratio' => 0.01,
            'company_id' => 1,
            'per' => 8.74,
            'pbr' => 0.69,
        ]);
    }
}
