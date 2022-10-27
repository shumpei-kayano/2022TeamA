<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'area_name'=>'大原周辺',
            'left_bottom_ido'=>'33.23227',
            'left_bottom_keido'=>'131.6045',
            'left_top_ido'=>'33.23498',
            'left_top_keido'=>'131.60622',
            'right_bottom_ido'=>'33.2307',
            'right_bottom_keido'=>'131.60731',
            'right_top_ido'=>'33.23334',
            'right_top_keido'=>'131.60942',
        ];
        DB::table('areas')->insert($param);

        $param=[
            'area_name'=>'鉄輪',
            'left_bottom_ido'=>'33.31534',
            'left_bottom_keido'=>'131.47559',
            'left_top_ido'=>'33.31615',
            'left_top_keido'=>'131.4758',
            'right_bottom_ido'=>'33.31534',
            'right_bottom_keido'=>'131.47773',
            'right_top_ido'=>'33.31619',
            'right_top_keido'=>'131.47793',
        ];
        DB::table('areas')->insert($param);
    }
    }
