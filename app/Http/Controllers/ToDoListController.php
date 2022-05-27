<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;
use Illuminate\Support\Facades\DB;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todolist = new ToDoList();

        $todolist->id_auto = $request->get('id_auto');
        $todolist->id_tarea = $request->get('id_tarea');

        $todolist->save();

        return redirect('/autos/'.$request->get('id_auto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
       //
    }

    /**
     * 
     */    
    public function eliminarTarea(Request $request)
    {
        $todolist_auto_tarea = DB::table('to_do_lists')
                ->where('id_auto', '=', $request->get('id_auto'))
                ->where('id_tarea', '=', $request->get('id_tarea'))
                ->get();

        $id_todolist = $todolist_auto_tarea[0]->{'id'};      

        $todolist_eliminar = ToDoList::find($id_todolist);
        $todolist_eliminar->delete();       

        return redirect('/autos/'.$request->get('id_auto'));
    }    
}
