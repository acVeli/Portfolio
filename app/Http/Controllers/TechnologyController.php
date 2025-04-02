<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Models\SkillsCategory;

class TechnologyController extends Controller
{
    public function index()
    {
        $skillsCategories = SkillsCategory::all();
        return view('admin.create_technology', compact('skillsCategories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'skills_category_id' => 'required|exists:skills_categories,id',
            'pourcentage' => 'required|integer|min:0|max:100',
        ]);

        Technology::create([
            'name' => $request->name,
            'skills_category_id' => $request->skills_category_id,
            'pourcentage' => $request->pourcentage,
        ]);

        return redirect()->route('skills')->with('success', 'Technology created successfully.');
    }

    public function destroy($id)
    {
        $technology = Technology::findOrFail($id);
        $technology->delete();

        return redirect()->route('skills')->with('success', 'Technology deleted successfully.');
    }

    public function edit($id)
    {
        $technology = Technology::findOrFail($id);
        $skillsCategories = SkillsCategory::all();
        return view('admin.edit_technology', compact('technology', 'skillsCategories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'skills_category_id' => 'required|exists:skills_categories,id',
            'pourcentage' => 'required|integer|min:0|max:100',
        ]);

        $technology = Technology::findOrFail($id);
        $technology->update([
            'name' => $request->name,
            'skills_category_id' => $request->skills_category_id,
            'pourcentage' => $request->pourcentage,
        ]);

        return redirect()->route('skills')->with('success', 'Technology updated successfully.');
    }

}
