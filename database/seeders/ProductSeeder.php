<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;



class ProductSeeder extends Seeder
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

            DB::table('products')->insert([
                'emri'=>$faker->sentence(5),
                'detajet_e_produktit'=>$faker->paragraph(4),
                'çmimi'=>$faker->numberBetween(1,6)
    
            ]);
        }
       
    }
}
