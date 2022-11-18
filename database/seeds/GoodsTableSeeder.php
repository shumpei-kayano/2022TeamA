<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $param=[
            'review_id'=>'1',
            'user_id'=>'2',
         ];
         DB::table('goods')->insert($param);
         $param=[
            'review_id'=>'1',
            'user_id'=>'3',
         ];
         DB::table('goods')->insert($param);
         $param=[
            'review_id'=>'1',
            'user_id'=>'4',
         ];
         DB::table('goods')->insert($param);


        $param=[
            'review_id'=>'2',
            'user_id'=>'1',
         ];
         DB::table('goods')->insert($param);
         $param=[
            'review_id'=>'2',
            'user_id'=>'2',
         ];
         DB::table('goods')->insert($param);

         $param=[
            'review_id'=>'2',
            'user_id'=>'4',
         ];
         DB::table('goods')->insert($param);


         $param=[
            'review_id'=>'3',
            'user_id'=>'1',
         ];
         DB::table('goods')->insert($param);

         $param=[
            'review_id'=>'3',
            'user_id'=>'3',
         ];
         DB::table('goods')->insert($param);
         $param=[
            'review_id'=>'3',
            'user_id'=>'4',
         ];
         DB::table('goods')->insert($param);

         $param=[
            'review_id'=>'4',
            'user_id'=>'1',
         ];
         DB::table('goods')->insert($param);
         

         $param=[
            'review_id'=>'4',
            'user_id'=>'3',
         ];




         

    }
}
