<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dispositivo;
use App\Producto;


class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = DB::table('dispositivos as d')
        ->join('productos','d.prod_cod','=','productos.prod_cod')
        ->select('d.dis_cod','d.imei','d.imei2','d.color','productos.prod_nom')
        ->orderBy('d.dis_cod')
        // ->get();
        ->paginate(15);
        return view('dispositivo.index', compact('dispositivos'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::orderBy('prod_nom')->get();
        return view('dispositivo.create',compact('productos'));
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
            'imei'     => 'required|min:15',
            //'imei2'  => 'required',
            'color'    => 'required',
            'prod_cod' => 'required'
       ]);

       $dispositivo = new Dispositivo;
       //$flight->name = $request->name
       $dispositivo->imei  = $request->imei;
       $dispositivo->imei2 = $request->imei2;
       $dispositivo->color = $request->color;
       $dispositivo->prod_cod = $request->prod_cod;
       $dispositivo->save();
       return redirect()->route('dispositivo.index')->with('status','guardado');
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
        $dispositivo = Dispositivo::findOrFail($id);
        $productos = Producto::all();
        return view('dispositivo.edit', compact('dispositivo','productos'));
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
        $dispositivo = Dispositivo::findOrFail($id);
        $dispositivo->fill($request->all()); // Campos de la tabla igual a los name del formulario
        $dispositivo->save();
        return redirect()->route('dispositivo.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dispositivo = Dispositivo::findOrFail($id);
        $dispositivo->delete();
        return redirect()->route('dispositivo.index')->with('status','eliminado');
    }
}
