<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Functions\Helper;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $races = Race::all();
        return view('admin.races.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.races.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_race = new Race();
        $new_race->fill($request->all());
        $new_race->slug = Helper::generateSlug($request->name, Race::class);


        $new_race->save();

        return redirect()->route('admin.races.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Race $race)
    {
        return view('admin.races.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Race $race)
    {
        $form_data = $request->all();
        if ($form_data['name'] != $race->name) {
            $form_data['slug'] = Helper::generateSlug($form_data['name'], Race::class);
        }
        else {
            $form_data['slug'] = $race->slug;
        }
        $race->update($form_data);


        return redirect()->route('admin.races.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Race $race)
    {
        $race->delete();
        return redirect()->route('admin.races.index')->with('success', 'La razza è stata inserita correttamente');
    }
}
