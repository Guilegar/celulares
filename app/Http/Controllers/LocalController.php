<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Local;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $locales = DB::table('locales')
                   ->select('local_cod','local_nom','local_dir','local_tel')  
                   ->orderBy('local_cod')
                   ->paginate(15);
                   return view ('local.index',compact('locales'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locales = Local::orderBy('local_cod')->get();
        return view('local.create',compact('locales'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'local_nom' => 'required',
            'local_dir' => 'required',
            'local_tel' => 'required'
       ]);

       $local = new Local();
       //$flight->name = $request->name
       $local->local_nom = $request->local_nom;
       $local->local_dir = $request->local_dir;
       $local->local_tel = $request->local_tel;
       $local->save();
       return redirect()->route('local.index')->with('status','guardado');

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
        $local = Local::findOrFail($id);
        
        return view('local.edit', compact('local'));
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
        $local = Local::findOrFail($id);
        $local->fill($request->all()); // Campos de la tabla igual a los name del formulario
        $local->save();
        return redirect()->route('local.index')->with('status','actualizado');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);
        $local->delete();
        return redirect()->route('local.index')->with('status','eliminado');
    }
}
