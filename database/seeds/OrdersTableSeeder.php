<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<11; $i++){
            DB::table('Orders')->insert([
                'menu_id' => $i,
                'customer_id' => $i,
                'table' => $i,
                'number' => $i,
            ]);
        }
    }
}
