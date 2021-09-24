<?php

namespace App\Http\Controllers;

use App\Models\Drawer;
use App\Models\Character; // Il est pas utile mais je l'ai mis au cas où.
use Illuminate\Http\Request;

class DrawerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drawers = Drawer::all();
        return view('/drawers_list', [
            'drawers' => $drawers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/drawer_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drawer = new Drawer;
        $drawer->name = $request->name;
        $drawer->birthyear = $request->birthyear;
        $drawer->nationality = $request->nationality;
        $drawer->save();
        
        return redirect('/dessinateurs')->with('status', 'Dessinateur ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drawer  $drawer
     * @return \Illuminate\Http\Response
     */
    public function show(Drawer $drawer)
    {
        return view('/drawer_detail', [
            'drawer' => $drawer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drawer  $drawer
     * @return \Illuminate\Http\Response
     */
    public function edit(Drawer $drawer)
    {
        return view('/drawer_edit', [
            'drawer' => $drawer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drawer  $drawer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drawer $drawer)
    {
        $drawer->name = $request->name;
        $drawer->birthyear = $request->birthyear;
        $drawer->nationality = $request->nationality;
        $drawer->save();
        
        return redirect('/dessinateurs')->with('status', 'Dessinateur modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drawer  $drawer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drawer $drawer)
    {
        $drawer->delete();

        return redirect('/dessinateurs')->with('status', 'Dessinateur supprimé');
    }
}
