<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Race;
use Faker\Generator as Faker;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $filePath = __DIR__ . '/race.csv';

        $data_csv = fopen($filePath, "r");

        // Conservo nella variabile header l'array con il nome dei vari campi
        $header = fgetcsv($data_csv);

        while (($row = fgetcsv($data_csv)) !== FALSE) {

            // [array_combine] prende due array e li combina per creare un nuovo array associativo
            $record = array_combine($header, $row);
            // aggiungo lo slug al mio array
            $record['slug'] = Helper::generateSlug($record['name'], Race::class);

            $record['Mod_FOR'] = $faker->numberBetween(-3, 3);
            $record['Mod_DES'] = $faker->numberBetween(-3, 3);
            $record['Mod_COS'] = $faker->numberBetween(-3, 3);
            $record['Mod_INT'] = $faker->numberBetween(-3, 3);
            $record['Mod_SAG'] = $faker->numberBetween(-3, 3);
            $record['Mod_CAR'] = $faker->numberBetween(-3, 3);

            // creo il nuovo progetto con i dati del record
            Race::create($record);
        }

        fclose($data_csv);
    }
}
