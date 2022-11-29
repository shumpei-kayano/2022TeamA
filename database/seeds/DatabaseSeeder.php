<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(PrefecturesTableSeeder::class);
         $this->call(BadgesTableSeeder::class);
        // $this->call(StoresTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        // $this->call(ReviewsTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(AlertsTableSeeder::class);
        // $this->call(AdminsTableSeeder::class);
    }
}
