<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
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
            $new_character->slug = Helper::generateSlug($new_character->name, Character::class);
            $new_character->height = $faker->numberBetween(1, 250);
            $new_character->weight = $faker->numberBetween(1, 150);
            $new_character->background = $faker->text(200);
            $new_character->image = $faker->imageUrl(360, 360, 'character', true, 'fantasy', true, 'jpg');
            $new_character->armour_class = $faker->randomElement(['Leggera', 'Media', 'Pesante']);
            $new_character->FOR = $faker->numberBetween(5, 20);
            $new_character->DES = $faker->numberBetween(5, 20);
            $new_character->COS = $faker->numberBetween(5, 20);
            $new_character->INT = $faker->numberBetween(5, 20);
            $new_character->SAG = $faker->numberBetween(5, 20);
            $new_character->CAR = $faker->numberBetween(5, 20);

            $new_character->save();
        }
    }
}
