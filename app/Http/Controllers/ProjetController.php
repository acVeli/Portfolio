<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use App\Http\Requests\ProjetRequest;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projet::all();
        return view('admin.projets', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_projet');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjetRequest $request)
    {
        // Les données validées sont obtenues via $request->validated()
        $validatedData = $request->validated();

        // Si une image est uploadée, la traiter
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Créer une nouvelle instance de Projet
        $projet = new Projet();
        $projet->image = $validatedData['image'] ?? null;
        $projet->title = $validatedData['title'];
        $projet->description = $validatedData['description'];
        $projet->tags = json_encode(explode(',', $validatedData['tags'])); // Si 'tags' est une liste séparée par des virgules
        $projet->project_link = $validatedData['project_link'] ?? null;
        $projet->github_link = $validatedData['github_link'] ?? null;
        $projet->save();

        return redirect()->route('projets')->with('success', 'Projet créé avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
