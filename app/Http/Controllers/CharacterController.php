<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Drawer;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('/characters_list', [
            'characters' => $characters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drawers = Drawer::all()->sortBy('name');
        return view('/character_create', [
            'drawers' => $drawers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->drawer_id = $request->drawer_id;
        $character->comic = $request->comic;
        $character->creation = $request->creation;
        // $character->detail = $request->detail; je le rajouterai si j'ai le temps
        $character->save();
        
        return redirect('/personnages')->with('status', 'Personnage ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        // dd($character);
        return view('/character_detail', [
            'character' => $character
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        $drawers = Drawer::all()->sortBy('name');
        return view('/character_edit', [
            "character" => $character,
            'drawers' => $drawers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        $character->name = $request->name;
        $character->drawer_id = $request->drawer_id;
        $character->comic = $request->comic;
        $character->creation = $request->creation;
        // $character->detail = $request->detail; // Je le rajouterai si j'ai le temps
        $character->save();
        
        return redirect('/personnages')->with('status', 'Personnage modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return redirect('/personnages')->with('status', 'Personnage supprimé');
    }
}
