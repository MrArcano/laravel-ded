<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function skills() {
        return $this->belongsToMany(Skill::class);
    }

    public function race() {
        return $this->belongsTo(Race::class);
    }

    protected $fillable = [
        'name',
        'slug',
        'height',
        'race_id',
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
