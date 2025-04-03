<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\limitOneEntry;
use App\Models\CurriculumVitae;

class CurriculumVitaeController extends Controller
{

    protected $limitOneEntry;

    public function __construct(limitOneEntry $limitOneEntry)
    {
        $this->limitOneEntry = $limitOneEntry;
    }

    public function index()
    {
        $cv = \App\Models\CurriculumVitae::all();
        return view('admin.curriculum_vitae', compact('cv'));
    }

    public function edit(){
        return view('admin.edit_curriculum_vitae');
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
        $this->limitOneEntry->check(CurriculumVitae::class);
        if ($request->session()->has('error')) {
            return redirect()->back()->with('error', 'Un CV existe déjà dans la base de données.');
        }
        
        $fileName = 'CV' . '.' . $request->cv->extension();
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

        $fileName = 'CV' . '.' . $request->cv->extension();
        $request->cv->move(public_path('uploads'), $fileName);

        return redirect()->route('cv')->with('success', 'CV modifié avec succès.');
    }

}
