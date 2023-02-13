<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'store_id' => '1',
            'provide' => '100',
            'coupon_photo' => 'http://jinta.oita.jp/wp-content/uploads/2022/01/24-600x600.jpg',
            'coupon_name' => '生ビール1杯無料*ソフトドリンクに変更可',
            'closetime' => '20230331',
            'areanum' => '1',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '3',
            'provide' => '100',
            'coupon_photo' => 'https://tblg.k-img.com/restaurant/images/Rvw/100596/640x640_rect_100596693.jpg',
            'coupon_name' => '1品頼むとソフトクリーム無料',
            'closetime' => '20230331',
            'areanum' => '2',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '4',
            'provide' => '100',
            'coupon_photo' => 'https://rimage.gnst.jp/rest/img/h4kr0g4f0000/s_0nb6.jpg?t=1626707664',
            'coupon_name' => 'ヤンニョムチキン無料',
            'closetime' => '20230331',
            'areanum' => '3',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '5',
            'provide' => '100',
            'coupon_photo' => 'https://www.atpress.ne.jp/releases/138267/img_138267_4.jpg',
            'coupon_name' => 'トッピング1個無料',
            'closetime' => '20230331',
            'areanum' => '4',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '6',
            'provide' => '100',
            'coupon_photo' => 'https://www.marunouchi.com/media/tenants/2020/07/%E3%83%9B%E3%83%86%E3%83%AB%E3%82%B7%E3%83%A7%E3%82%B3%E3%83%A9_1.jpeg',
            'coupon_name' => 'チョコ23%OFF',
            'closetime' => '20230331',
            'areanum' => '5',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '7',
            'provide' => '100',
            'coupon_photo' => 'https://prtimes.jp/i/42376/6/ogp/d42376-6-535465-0.jpg',
            'coupon_name' => 'パフェ100円引き',
            'closetime' => '20230331',
            'areanum' => '6',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '8',
            'provide' => '100',
            'coupon_photo' => 'https://www.kikutaro.net/uploads/1/1/7/2/117232879/627433642_orig.jpg',
            'coupon_name' => 'テリーヌ羊羹2個プレゼント',
            'closetime' => '20230331',
            'areanum' => '7',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '9',
            'provide' => '100',
            'coupon_photo' => 'https://smile-gourmet.net/smile-gourmet/wp-content/uploads/2021/05/6d644914eddd6b375f1ed2a6a7d9a79a.jpg',
            'coupon_name' => '1品頼むとサラダバー無料',
            'closetime' => '20230331',
            'areanum' => '8',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '10',
            'provide' => '100',
            'coupon_photo' => 'https://imgfp.hotp.jp/IMGH/01/54/P035760154/P035760154_480.jpg',
            'coupon_name' => '生ビール1杯無料*ソフトドリンクに変更可',
            'closetime' => '20230331',
            'areanum' => '9',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);


        $param = [
            'store_id' => '11',
            'provide' => '100',
            'coupon_photo' => 'https://www.doutor.co.jp/common/images/topimg_dcs.jpg',
            'coupon_name' => 'コーヒー2杯目半額',
            'closetime' => '20230331',
            'areanum' => '10',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '12',
            'provide' => '100',
            'coupon_photo' => 'https://imgfp.hotp.jp/IMGH/96/17/P036119617/P036119617_480.jpg',
            'coupon_name' => '生ビール1杯無料*ソフトドリンクに変更可',
            'closetime' => '20230331',
            'areanum' => '11',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '13',
            'provide' => '100',
            'coupon_photo' => 'https://www.traindor.com/img/ph_shop.png',
            'coupon_name' => 'パン20%OFF',
            'closetime' => '20230331',
            'areanum' => '12',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '2',
            'provide' => '100',
            'coupon_photo' => 'https://tblg.k-img.com/restaurant/images/Rvw/86104/640x640_rect_86104118.jpg',
            'coupon_name' => '替玉1回無料',
            'closetime' => '20230331',
            'areanum' => '13',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        
        $param = [
            'store_id' => '14',
            'provide' => '100',
            'coupon_photo' => 'https://tabelog.com/restaurant/images/Rvw/136230/640x640_rect_136230460.jpg',
            'coupon_name' => 'ケーキセット100円引き',
            'closetime' => '20230331',
            'areanum' => '1',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);


        $param = [
            'store_id' => '15',
            'provide' => '100',
            'coupon_photo' => 'https://d340eiag32bpum.cloudfront.net/img/post/spot/342/34153-0B5fkGPXfqX4SdaTa4ps_lrg.jpg',
            'coupon_name' => '地獄蒸したまご2個プレゼント',
            'closetime' => '20230331',
            'areanum' => '2',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '16',
            'provide' => '100',
            'coupon_photo' => 'https://tblg.k-img.com/restaurant/images/Rvw/147220/640x640_rect_147220624.jpg',
            'coupon_name' => '温泉たまご1個無料',
            'closetime' => '20230331',
            'areanum' => '3',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '17',
            'provide' => '100',
            'coupon_photo' => 'https://tblg.k-img.com/restaurant/images/Rvw/98585/640x640_rect_98585480.jpg',
            'coupon_name' => 'おでん1個無料',
            'closetime' => '20230331',
            'areanum' => '4',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '20',
            'provide' => '100',
            'coupon_photo' => 'https://e-holiday.net/wp-content/uploads/beppu-oita-gourmet-5.jpg',
            'coupon_name' => '定食200円引き',
            'closetime' => '20230331',
            'areanum' => '5',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '22',
            'provide' => '100',
            'coupon_photo' => 'https://www.jalan.net/jalan/img/3/kuchikomi/4603/KXL/d7818_0004603762_1.jpg',
            'coupon_name' => 'むし湯1回半額',
            'closetime' => '20230331',
            'areanum' => '6',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);


        
        $param = [
            'store_id' => '23',
            'provide' => '100',
            'coupon_photo' => 'https://onsen.mobi/picture/8602_1.jpg?1402288804',
            'coupon_name' => '1回無料',
            'closetime' => '20230331',
            'areanum' => '7',
            'provideflg' => '0',
        ];
        DB::table('coupons')->insert($param);


        $param = [
            'store_id' => '18',
            'provide' => '100',
            'coupon_photo' => 'https://beppu-yufu-hita.goguynet.jp/wp-content/uploads/sites/171/2021/05/62A3F4DB-AAFD-4114-8AF8-C089281598D1.jpeg',
            'coupon_name' => 'チョコバー1個無料',
            'closetime' => '20230331',
            'areanum' => '8',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '19',
            'provide' => '100',
            'coupon_photo' => 'https://tblg.k-img.com/restaurant/images/Rvw/70585/640x640_rect_70585716.jpg',
            'coupon_name' => '地獄蒸したまご1個無料',
            'closetime' => '20230331',
            'areanum' => '9',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

        $param = [
            'store_id' => '21',
            'provide' => '100',
            'coupon_photo' => 'https://tblg.k-img.com/restaurant/images/Rvw/112203/640x640_rect_112203898.jpg',
            'coupon_name' => '手羽先100円引き',
            'closetime' => '20230331',
            'areanum' => '10',
            'provideflg' => '0',
        
        ];
        DB::table('coupons')->insert($param);

    }
}
