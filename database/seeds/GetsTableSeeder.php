<?php

use Illuminate\Database\Seeder;

class GetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'badge_id'=>'9',
            'user_id'=>'1',
            'get_date'=>'2022/11/24',
         ];
         DB::table('gets')->insert($param);
         $param=[
            'badge_id'=>'10',
            'user_id'=>'1',
            'get_date'=>'2022/11/25',
         ];
         DB::table('gets')->insert($param);
    }
    
}
