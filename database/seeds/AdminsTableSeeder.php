<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email'=>'aa@aaaaa',
            'password'=> Hash::make('123456789'),
            'store_id'=>'8',
            'coupon_id' => '7',
        ];
        DB::table('admins')->insert($param);

}
}