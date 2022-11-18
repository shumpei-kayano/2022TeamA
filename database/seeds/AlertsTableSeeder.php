<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class AlertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'comment' => '3日で使用期限を迎えるクーポンがあります。',
        ];
        DB::table('alerts')->insert($param);

        $param = [
            'comment' => 'おめでとうございます！新しいバッジを獲得しました。',
        ];
        DB::table('alerts')->insert($param);

    }
}
