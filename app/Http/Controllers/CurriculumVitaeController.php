<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumVitaeController extends Controller
{
    public function index()
    {
        $cv = \App\Models\CurriculumVitae::all();
        return view('admin.curriculum_vitae', compact('cv'));
    }

    public function upload(){
        return view('admin.upload_curriculum_vitae');
    }

    public function create()
    {
        return view('admin.create_curriculum_vitae');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        // Check if the user already has a CV entry
        $this->limitOneEntry();
        if ($request->session()->has('error')) {
            return redirect()->back()->with('error', 'Un CV existe déjà dans la base de données.');
        }

        $fileName = time() . '.' . $request->cv->extension();
        $request->cv->move(public_path('uploads'), $fileName);

        $cv = new \App\Models\CurriculumVitae();	
        $cv->url = '/uploads/'.$fileName;
        $cv->save();

        return redirect()->route('cv')->with('success', 'CV envoyé avec succès.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        $fileName = time() . '.' . $request->cv->extension();
        $request->cv->move(public_path('uploads'), $fileName);

        return redirect()->back()->with('success', 'CV updated successfully.');
    }

    public function limitOneEntry()
    {
        $cvCount = \App\Models\CurriculumVitae::count();
        if ($cvCount >= 1) {
            return redirect()->back()->with('error', 'Il y a déjà une entrée de CV dans la base de données.');
        }
    }

}
