<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
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
            Category::create([
                'name'          => $faker->name,
                'description'   => $faker->text,
            ]);
        }
    }
}
W