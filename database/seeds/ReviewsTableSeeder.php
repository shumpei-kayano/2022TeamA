<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'user_id'=>'1',
            'visited'=>'2022/10/31',
            'comment'=>'職人さんが経営する個人オーナーではなかなかできない演出力である。
            その反面、こういった資本力のある会社さんのお店だとクオリティがすごかった。',
            'store_id'=>'4',
            'posted_date'=>'2022/11/01',
            'star'=>'3',
            'goodnum' => '8'
        ];
        DB::table('reviews')->insert($param);

        $param=[
            'user_id'=>'3',
            'visited'=>'2022/11/02',
            'comment'=>'今朝、モーニングのチーズとトマトを頼んだ。写真がとても美味しそうだったからだ。
            トマトも分厚く食べごたえがありそうで、具が中から溢れんばかりの美味しいをかもしだしていた。',
            'store_id'=>'11',
            'posted_date'=>'2022/11/10',
            'star'=>'3',
            'goodnum' => '8'
        ];
        DB::table('reviews')->insert($param);

        $param=[
            'user_id'=>'2',
            'visited'=>'2022/10/15',
            'comment'=>'黒胡麻アイスクリームは胡麻の味がしっかり！どちらかと言うと甘めです。
            黒胡麻餡はさらに胡麻が強く、あんこらしいねっとりとした舌触りと甘さが冷たいアイスやホイップと相性抜群です(*^^*)',
            'store_id'=>'7',
            'posted_date'=>'2022/10/18',
            'star'=>'4',
            'goodnum' => '8'
        ];
        DB::table('reviews')->insert($param);
        $param=[
            'user_id'=>'2',
            'visited'=>'2022/10/20',
            'comment'=>'別府温泉街の中心、いでゆ坂沿いに在る別府温泉ならではの地熱で蒸した料理を提供する店。
            地獄めぐりをしている観光客に人気の料理店です。',
            'store_id'=>'15',
            'posted_date'=>'2022/11/16',
            'star'=>'3',
            'goodnum' => '8'
        ];
        DB::table('reviews')->insert($param);

    }
}
