<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillsCategory;

class SkillsCategoryController extends Controller
{
    public function index()
    {
        $skillsCategories = SkillsCategory::all(); 
        return view('admin.skills', compact('skillsCategories'));
    }

    public function create()
    {
        return view('admin.create_skills_categorie');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        SkillsCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('skills')->with('success', 'Skills category created successfully.');
    }

    public function edit($id)
    {
        $skillsCategory = SkillsCategory::findOrFail($id);
        return view('admin.edit_skills_categorie', compact('skillsCategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $skillsCategory = SkillsCategory::findOrFail($id);
        $skillsCategory->update([
            'name' => $request->name,
        ]);

        return redirect()->route('skills')->with('success', 'Skills category updated successfully.');
    }

    public function destroy($id)
    {
        $skillsCategory = SkillsCategory::findOrFail($id);
        $skillsCategory->delete();

        return redirect()->route('skills')->with('success', 'Skills category deleted successfully.');
    }

}
