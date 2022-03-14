<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i<11; $i++){
            DB::table('customers')->insert([
                'number' => $i,
                'table'  => $i,
                'status' => $faker->randomElement($array=['0','1','2'])
            ]);
        }
    }
}
