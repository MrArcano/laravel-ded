<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Skill;
// importo l'Helper per lo slug
use App\Functions\Helper;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all() ;
        return view('admin.characters.index', compact("characters"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();
        $races = Race::all();
        return view('admin.characters.create', compact('races', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {

        $new_character = new Character();
        $form_data = $request->all();

        // aggiungo dentro l'array $form_data anche lo slug, generato tramite l'Helper::generateSlug()
        $form_data['slug'] = Helper::generateSlug($form_data['name'], Character::class);
        $new_character->fill($form_data);
        $new_character->save();

        //attach degli id delle skill al id del character
        if(array_key_exists('skills',$form_data)){
            $new_character->skills()->attach($form_data['skills']);
        }

        return redirect()->route('admin.characters.show',$new_character);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        $skills = Skill::all();
        $races = Race::all();
        return view('admin.characters.edit', compact('character', 'races', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharacterRequest $request,Character $character)
    {
        $form_data = $request->all();
        $form_data['slug'] = Helper::generateSlug($form_data['name'], Character::class);
        $character->update($form_data);

        if(array_key_exists('skills',$form_data)){
            $character->skills()->sync($form_data['skills']);
        }else{
            $character->skills()->detach();
        }


        return redirect()->route('admin.characters.show',$character);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index')->with('success', 'Il personaggio è stato eliminato correttamente');
    }
}
