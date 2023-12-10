<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Functions\Helper;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CSVController extends Controller
{

    public function importCsv(Request $request){

        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $file = $request->file('csv_file');
        $filePath = $file->getPathname();

        $data_csv = fopen($filePath,"r");

        // Conservo nella variabile header l'array con il nome devi vari campi
        $header = fgetcsv($data_csv);

        while ( ($row = fgetcsv($data_csv) ) !== FALSE ) {

            // [array_combine] prende due array e li combina per creare un nuovo array associativo
            $record = array_combine($header, $row);

            // aggiungo lo slug al mio array
            $record['slug'] = Helper::generateSlug($record['name'],Character::class);

            // creo il nuovo progetto con i dati del record
            Character::create($record);
        }

        fclose($data_csv);

        return redirect()->route('admin.characters.index')->with('success', 'CSV file imported successfully.');
    }

    public function exportCsv(Request $request){

        // Ottieni il nome del file dalla richiesta o utilizza un nome predefinito
        $filename = $request->input('filename', 'export_characters_' . Str::slug(now()) . '.csv');

        $headers = [
            'Content-type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Expires'             => '0',
        ];

        $list = Character::select(
                                'name',
                                'image',
                                'background',
                                'height',
                                'weight',
                                'armour_class',
                                'FOR',
                                'DES',
                                'COS',
                                'INT',
                                'SAG',
                                'CAR',
                                )
                                ->get()->toArray();

        // Intestazione del CSV
        array_unshift($list, array_keys($list[0]));

        $callback = function() use ($list)
        {
            $file = fopen('php://output', 'w');
            foreach ($list as $row) {
                fputcsv($file, $row);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
