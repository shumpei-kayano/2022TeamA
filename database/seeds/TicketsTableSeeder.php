<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'store_id' => '5',
            'user_id' => '3',
            'coupon_id' => '4',
            'term_of_use' => '2022/12/13',
            'flg' => '0'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '21',
            'user_id' => '3',
            'coupon_id' => '23',
            'term_of_use' => '2022/12/13',
            'flg' => '0'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '8',
            'user_id' => '1',
            'coupon_id' => '7',
            'term_of_use' => '2022/12/13',
            'flg' => '1'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '22',
            'user_id' => '1',
            'coupon_id' => '19',
            'term_of_use' => '2022/12/13',
            'flg' => '0'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '14',
            'user_id' => '2',
            'coupon_id' => '14',
            'term_of_use' => '2022/12/13',
            'flg' => '1'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '18',
            'user_id' => '2',
            'coupon_id' => '21',
            'term_of_use' => '2022/12/13',
            'flg' => '1'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '7',
            'user_id' => '4',
            'coupon_id' => '6',
            'term_of_use' => '2022/12/13',
            'flg' => '0'
        ];
        DB::table('Tickets')->insert($param);

        $param = [
            'store_id' => '7',
            'user_id' => '4',
            'coupon_id' => '6',
            'term_of_use' => '2022/12/13',
            'flg' => '0'
        ];

        DB::table('Tickets')->insert($param);
        $param = [
            'store_id' => '7',
            'user_id' => '4',
            'coupon_id' => '6',
            'term_of_use' => '2022/12/13',
            'flg' => '1'
        ];
        DB::table('Tickets')->insert($param);
    }
}
