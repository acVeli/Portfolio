<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialNetworks = SocialNetwork::all();
        return view('admin.social_networks', compact('socialNetworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_social_network');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        $socialNetwork = new SocialNetwork();
        $socialNetwork->name = $request->name;
        $socialNetwork->url = $request->url;
        $socialNetwork->save();
        return redirect()->route('social_networks')->with('success', 'Réseau social créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialNetwork $socialNetwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $socialNetwork = SocialNetwork::find($id);
        return view('admin.edit_social_network', compact('socialNetwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialNetwork $socialNetwork)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ]);
        $socialNetwork = SocialNetwork::find($request->id);
        $socialNetwork->name = $request->name;
        $socialNetwork->url = $request->url;
        $socialNetwork->save();
        return redirect()->route('social_networks')->with('success', 'Réseau social mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $socialNetwork = SocialNetwork::find($id);
        $socialNetwork->delete();
        return redirect()->route('social_networks')->with('success', 'Réseau social supprimé avec succès.');
    }
}
