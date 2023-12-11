<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterCSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = __DIR__ . '\characters.csv';

        $data_csv = fopen($filePath, "r");

        // Conservo nella variabile header l'array con il nome dei vari campi
        $header = fgetcsv($data_csv);

        while (($row = fgetcsv($data_csv)) !== FALSE) {

            // [array_combine] prende due array e li combina per creare un nuovo array associativo
            $record = array_combine($header, $row);
            // aggiungo lo slug al mio array
            $record['slug'] = Helper::generateSlug($record['name'], Character::class);

            // creo il nuovo progetto con i dati del record
            Character::create($record);
        }

        fclose($data_csv);
    }
}
