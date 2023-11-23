<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use Faker\Factory as Faker;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker::create('es_ES');

            $new_character = new Character();

            $new_character->name = $faker->name();
            $new_character->height = $faker->numberBetween(1, 1000);
            $new_character->weight = $faker->numberBetween(1, 1000);
            $new_character->background = $faker->text(200);
            $new_character->image = $faker->imageUrl(360, 360, 'character', true, 'fantasy', true, 'jpg');
            $new_character->armour_class = $faker->randomElement(['a', 'b', 'c', 'd', 'e']);
            $new_character->FOR = $faker->numberBetween(1, 10);
            $new_character->DES = $faker->numberBetween(1, 10);
            $new_character->COS = $faker->numberBetween(1, 10);
            $new_character->INT = $faker->numberBetween(1, 10);
            $new_character->SAG = $faker->numberBetween(1, 10);
            $new_character->CAR = $faker->numberBetween(1, 10);

            $new_character->save();
        }
    }
}
