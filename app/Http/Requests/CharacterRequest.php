<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=> "required|min:3|max:50",
            "height"=> "required|numeric|min:1|max:1000",
            "weight"=> "required|numeric|min:1|max:1000",
            "background"=> "required",
            "image"=> "required|max:255",
            "armour_class"=> "required|max:10",
            "FOR"=> "required|numeric|min:1|max:10",
            "DES"=> "required|numeric|min:1|max:10",
            "COS"=> "required|numeric|min:1|max:10",
            "INT"=> "required|numeric|min:1|max:10",
            "SAG"=> "required|numeric|min:1|max:10",
            "CAR"=> "required|numeric|min:1|max:10",
        ];
    }
    public function messages(){
        return [
            "name.required" => "Il name è obbligatorio",
            "height.required" => "L'altezza è obbligatoria",
            "weight.required" => "Il peso è obbligatorio",
            "background.required" => "Il background è obbligatorio",
            "image.required" => "L'immagine è obbligatoria",
            "armour_class.required" => "La classe armor è obbligatoria",
            "FOR.required" => "FOR è obbligatorio",
            "DES.required" => "DES è obbligatorio",
            "COS.required" => "COS è obbligatorio",
            "INT.required" => "INT è obbligatorio",
            "SAG.required" => "SAG è obbligatorio",
            "CAR.required" => "CAR è obbligatorio",
            "FOR.max" => "FOR deve essere massimo :max",
        ];
    }
}
