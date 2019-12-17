<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producto;
use App\Proveedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $productos = DB::table('productos as pd')
            ->join('proveedores','pd.prov_cod','=','proveedores.prov_cod')
            ->select('pd.prod_cod','pd.prod_nom','pd.prod_desc','pd.prod_valor','pd.stock','proveedores.prov_nom')
            ->orderBy('pd.prod_cod')
            // ->get();
            ->paginate(15);
            return view('producto.index', compact('productos'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::orderBy('prov_nom')->get();
        return view('producto.create',compact('proveedores'));
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
            'prod_nom' => 'required|min:5',
            'prod_desc' => 'required',
            'prod_valor' => 'required',
            'stock' => 'required',
            'prov_cod' => 'required'
       ]);

       $producto = new Producto;
       //$flight->name = $request->name
       $producto->prod_nom  = $request->prod_nom;
       $producto->prod_desc = $request->prod_desc;
       $producto->prod_valor = $request->prod_valor;
       $producto->stock = $request->stock;
       $producto->prov_cod = $request->prov_cod;
       $producto->save();
       return redirect()->route('producto.index')->with('status','guardado');
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
        $producto = Producto::findOrFail($id);
        $proveedores = Proveedor::all();
        return view('producto.edit', compact('producto','proveedores'));
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
        $producto = Producto::findOrFail($id);
        $producto->fill($request->all()); // Campos de la tabla igual a los name del formulario
        $producto->save();
        return redirect()->route('producto.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('status','eliminado');
    }
}
