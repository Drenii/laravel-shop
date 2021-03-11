<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,6) as $index){

            DB::table('stocks')->insert([
                'product_id'=>$faker->unique->numberBetween(1,6),
                'vlera_e_stokut'=>"1"
    
            ]);
        }
       
    }
}
