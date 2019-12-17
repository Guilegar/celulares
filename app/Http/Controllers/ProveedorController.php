<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::table('proveedores')
                   ->select('prov_cod','prov_id','prov_nom','prov_dir','prov_tel')  
                   ->orderBy('prov_cod')
                   ->paginate(15);
                   return view ('proveedor.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::orderBy('prov_cod')->get();
        return view('proveedor.create',compact('proveedores'));
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
            'prov_id' => 'required',
            'prov_nom' => 'required',
            'prov_dir' => 'required',
            'prov_tel' => 'required',
           
       ]);

       $proveedor = new Proveedor();
       //$flight->name = $request->name
       $proveedor->prov_id = $request->prov_id;
       $proveedor->prov_nom = $request->prov_nom;
       $proveedor->prov_dir = $request->prov_dir;
       $proveedor->prov_tel = $request->prov_tel;
       $proveedor->save();
       return redirect()->route('proveedor.index')->with('status','guardado');

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
        $proveedor = Proveedor::findOrFail($id);
        
        return view('proveedor.edit', compact('proveedor'));
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
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->fill($request->all()); // Campos de la tabla igual a los name del formulario
        $proveedor->save();
        return redirect()->route('proveedor.index')->with('status','actualizado');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('status','eliminado');

    }
}
