<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Asesor;
Use App\Estado;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesores = DB::table('asesores as a')
        ->join('estados','a.est_cod','=','estados.est_cod')
        ->select('a.ase_cod','a.ase_id','a.ase_nom','a.ase_dir','a.ase_tel','estados.est_desc')
        ->orderBy('ase_cod')
    // ->get();
        ->paginate(15);
        return view('asesor.index', compact('asesores'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::orderBy('est_desc')->get();
        return view('asesor.create',compact('estados'));
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
            'ase_id' => 'required',
            'ase_nom' => 'required',
            'ase_dir' => 'required',
            'ase_tel' => 'required',
            'est_cod' => 'required'
       ]);

       $asesor = new Asesor;
       //$flight->name = $request->name
       $asesor->ase_id  = $request->ase_id;
       $asesor->ase_nom = $request->ase_nom;
       $asesor->ase_dir = $request->ase_dir;
       $asesor->ase_tel = $request->ase_tel;
       $asesor->est_cod = $request->est_cod;
       $asesor->save();
       return redirect()->route('asesor.index')->with('status','guardado');
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
        $asesor = Asesor::findOrFail($id);
        $estados = Estado::all();
        return view('asesor.edit', compact('asesor','estados'));
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
        $asesor = Asesor::findOrFail($id);
        $asesor->fill($request->all()); // Campos de la tabla igual a los name del formulario
        $asesor->save();
        return redirect()->route('asesor.index')->with('status','actualizado');
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
}
