<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use App\Http\Requests\ProjetRequest;
use App\Http\Services\ConvertImgToAvifService;

class ProjetController extends Controller
{

    protected $convertImgToAvifService;

    public function __construct(ConvertImgToAvifService $convertImgToAvifService)
    {
        $this->convertImgToAvifService = $convertImgToAvifService;
    }
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

        $this->convertImgToAvifService->convert(
            public_path('storage/' . $validatedData['image']),
            public_path('storage/images/' . pathinfo($validatedData['image'], PATHINFO_FILENAME) . '.avif')
        );
        unlink(public_path('storage/' . $validatedData['image']));

        $validatedData['image'] = 'images/' . pathinfo($validatedData['image'], PATHINFO_FILENAME) . '.avif';

        // Créer une nouvelle instance de Projet
        $projet = new Projet();
        $projet->image = $validatedData['image'] ?? null;
        $projet->title = $validatedData['title'];
        $projet->description = $validatedData['description'];
        $projet->tags = json_encode(explode(' ', $validatedData['tags'])); // Si 'tags' est une liste séparée par des virgules
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
    public function edit($id)
    {
        $project = Projet::find($id);

        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Projet introuvable.');
        }

        return view('admin.edit_projet', compact('project'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {

        $projet = Projet::findOrFail($request->id);

        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'tags' => 'nullable|string',
            'project_link' => 'nullable|url|max:255',
            'github_link' => 'nullable|url|max:255'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $this->convertImgToAvifService->convert(
                public_path('storage/' . $imagePath),
                public_path('storage/images/' . pathinfo($imagePath, PATHINFO_FILENAME) . '.avif')
            );
            unlink(public_path('storage/' . $imagePath));
            $imagePath = 'images/' . pathinfo($imagePath, PATHINFO_FILENAME) . '.avif';
            $validatedData['image'] = $imagePath;
        }

        $projet->update($validatedData);

        return redirect()->route('projets')->with('success', 'Projet mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet, Request $request)
    {
        $projet = Projet::findOrFail($request->id);
        if ($projet->image) {
            $imagePath = public_path('storage/' . $projet->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $projet->delete();
        return redirect()->route('projets')->with('success', 'Projet supprimé avec succès.');
    }
}
