<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function race() {
        return $this->belongsTo(Race::class);
    }

    protected $fillable = [
        'name',
        'slug',
        'height',
        'weight',
        'background',
        'image',
        'armour_class',
        'FOR',
        'DES',
        'COS',
        'INT',
        'SAG',
        'CAR'
    ] ;
}
