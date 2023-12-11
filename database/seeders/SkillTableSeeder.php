<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Skill;
use Faker\Generator as Faker;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $filePath = __DIR__ . '\skill.csv';

        $data_csv = fopen($filePath, "r");

        // Conservo nella variabile header l'array con il nome dei vari campi
        $header = fgetcsv($data_csv);

        while (($row = fgetcsv($data_csv)) !== FALSE) {

            // [array_combine] prende due array e li combina per creare un nuovo array associativo
            $record = array_combine($header, $row);
            // aggiungo lo slug al mio array
            $record['slug'] = Helper::generateSlug($record['name'], Skill::class);

            // visto che è un dato inserito nel file skill.csv non serve più aggiungerlo con il faker
            // $record['trait'] = $faker->randomElement(['FOR', 'DES', 'COS', 'INT', 'SAG', 'CAR']);

            // creo il nuovo progetto con i dati del record
            Skill::create($record);
        }

        fclose($data_csv);
    }
}
