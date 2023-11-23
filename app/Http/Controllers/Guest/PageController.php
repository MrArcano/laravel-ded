<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $characters = Character::all();
        return view("home", compact("characters"));
    }
}
