<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '歌田紬',
            'email' => 'utashinzidai@gmail.com',
            'password' => 'utautau',
            'icon_photo' => 'https://illustration-free.net/thumb/svg/ifn0946.svg'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '東雲想',
            'email' => 'sinonomesan@gmail.com',
            'password' => 'sino',
            'icon_photo' => 'https://illustration-free.net/thumb/svg/ifn0935.svg'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '西田萌香',
            'email' => 'ishimoe@gmail.com',
            'password' => 'moemoe',
            'icon_photo' => 'https://illustration-free.net/thumb/svg/ifn0931.svg'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '湊柊翔',
            'email' => 'shutoaya@gmail.com',
            'password' => 'shutoayano',
            'icon_photo' => 'https://illustration-free.net/thumb/svg/ifn0940.svg'

        ];
        DB::table('users')->insert($param);
    }
}
