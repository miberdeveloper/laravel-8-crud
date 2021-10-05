<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i=0; $i < 5; $i++) { 
            Item::create([
                'name'          => $faker->name,
                'description'   => $faker->text,
                'price'         => $faker->numberBetween(1500, 6000),
            ]);
        }
    }
}
