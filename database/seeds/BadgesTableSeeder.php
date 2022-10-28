<?php

use Illuminate\Database\Seeder;

class BadgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'badge_name'=>'5ガチャ'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'20ガチャ'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'50ガチャ'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'100ガチャ'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'3店舗'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'5店舗'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'10店舗'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'50店舗'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'初めての投稿'
        ];
        DB::table('badges')->insert($param);
        
        $param=[
            'badge_name'=>'5回目の投稿'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'10回目の投稿'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'50回目の投稿'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'1いいね獲得'
        ];
        DB::table('badges')->insert($param);
        
        $param=[
            'badge_name'=>'20いいね獲得'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'50いいね獲得'
        ];
        DB::table('badges')->insert($param);

        $param=[
            'badge_name'=>'100いいね獲得'
        ];
        DB::table('badges')->insert($param);
    }
}
