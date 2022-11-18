<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '2',
            'alert_id' => '1',
            'notice' => '2022/10/29',
            'flg' => '0',
        ];
        DB::table('notices')->insert($param);

        $param = [
            'user_id' => '2',
            'alert_id' => '2',
            'notice' => '2022/10/31',
            'flg' => '1',
        ];
        DB::table('notices')->insert($param);

        $param = [
            'user_id' => '2',
            'alert_id' => '1',
            'notice' => '2022/11/01',
            'flg' => '0',
        ];
        DB::table('notices')->insert($param);

        $param = [
            'user_id' => '2',
            'alert_id' => '2',
            'notice' => '2022/11/03',
            'flg' => '1',
        ];
        DB::table('notices')->insert($param);

        $param = [
            'user_id' => '5',
            'alert_id' => '1',
            'notice' => '2022/11/05',
            'flg' => '0',
        ];
        DB::table('notices')->insert($param);

        $param = [
            'user_id' => '1',
            'alert_id' => '2',
            'notice' => '2022/11/04',
            'flg' => '1',
        ];
        DB::table('notices')->insert($param);

        $param = [
            'user_id' => '3',
            'alert_id' => '1',
            'notice' => '2022/11/06',
            'flg' => '0',
        ];
        DB::table('notices')->insert($param);

    }
}
