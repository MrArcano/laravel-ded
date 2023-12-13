<?php

namespace App\Http\Controllers\Admin;

use App\Functions\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'trait' => 'required',
        ]);

        $form_data = $request->all();
        $form_data['slug'] = Helper::generateSlug($form_data['name'], Skill::class);



        Skill::create($form_data);

        // $new_skill= new Skill();
        // $new_skill->fill($form_data);
        // $new_skill->save();
        return redirect()->route('admin.skills.index');
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
    public function edit(Skill $skill)
    {

        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'trait' => 'required',
        ]);
        $form_data = $request->all();
        if ($form_data['name'] != $skill->name) {
            $form_data['slug'] = Helper::generateSlug($form_data['name'], Skill::class);
        }
        else {
            $form_data['slug'] = $skill->slug;
        }
        $skill->update($form_data);

        return redirect()->route('admin.skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills.index');
    }
}
