<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Tarea;
use App\Models\ToDoList;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $autos = Auto::all();
       return view('auto.index')->with('autos', $autos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ranking_campeonato'=>'required|integer',
            'piloto'=>'required|max:255|unique:autos',
            'numero_auto'=>'required|integer|unique:autos',
            'cant_puntos'=>'required|integer',
        ]);
        $auto = new Auto();
        
        $auto->ranking_campeonato = $request->get('ranking_campeonato');
        $auto->piloto = $request->get('piloto');
        $auto->numero_auto = $request->get('numero_auto'); 
        $auto->cant_puntos = $request->get('cant_puntos');

        $auto->save();

        return redirect('/autos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auto = Auto::find($id);
        $tareas = Tarea::all();
        return view('auto.show')->with('auto', $auto)->with('tareas', $tareas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = Auto::find($id);
        return view('auto.edit')->with('auto', $auto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $auto = Auto::find($id);
        $request->validate([
            'ranking_campeonato'=>'required|integer',
            'piloto'=>'required|max:255|unique:autos,piloto,' .$auto->id,
            'numero_auto'=>'required|integer|unique:autos,numero_auto,'.$auto->id,
            'cant_puntos'=>'required|integer',
        ]);

        $auto->ranking_campeonato = $request->get('ranking_campeonato');
        $auto->piloto = $request->get('piloto');
        $auto->numero_auto = $request->get('numero_auto'); 
        $auto->cant_puntos = $request->get('cant_puntos');

        $auto->save();

        return redirect('/autos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Auto::find($id);
        $auto->delete();

        return redirect('/autos');
    }
}
