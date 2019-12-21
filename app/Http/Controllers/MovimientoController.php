<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Movimiento;
use App\Producto;
use App\Dispositivo;
use App\Asesor;
use App\Local;
use App\Accion;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = DB::table('movimientos as m')
            ->join('dispositivos','m.dis_cod','=','dispositivos.dis_cod')
            ->join('productos','dispositivos.prod_cod','productos.prod_cod')
            ->join('accion','m.acc_cod','=','accion.acc_cod')
            ->join('locales','m.local_cod','=','locales.local_cod')
            ->join('asesores','m.ase_cod','=','asesores.ase_cod')
            
            ->select('m.movi_cod','productos.prod_nom','dispositivos.color','dispositivos.imei','dispositivos.imei2','m.fecha',
                     'accion.acc_nom','locales.local_nom','asesores.ase_nom','m.obs_mov')
            ->orderBy('m.movi_cod')
            // ->get();
            ->paginate(15);
            //dd($productos); --> SE UTILIZA PARA IMPRIMIR EN PANTALLA
           return view('movimiento.index', compact('movimientos'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos      = Producto::orderBy('prod_nom')->get();
        $dispositivos   = Dispositivo::orderBy('color')->get();
        $acciones       = Accion::orderBy('acc_nom')->get();
        $locales        = Local::orderBy('local_nom')->get();
        $asesores       = Asesor::orderBy('ase_nom')->get();
        return view('movimiento.create',compact('productos','dispositivos','acciones','locales','asesores'));

        
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
            'dis_cod' => 'required',
            'acc_cod' => 'required',
            'fecha' => 'required',
            'local_cod' => 'required',
            'ase_cod' => 'required'
       ]);

       $movimiento = new Movimiento;
       //$flight->name = $request->name
      // $fecha = DateTime::createFromFormat('d-m-Y',$request->fecha )->format('Y-m-d');
       $movimiento->dis_cod  = $request->dis_cod;
       $movimiento->fecha = $request->fecha;
       $movimiento->acc_cod = $request->acc_cod;
       $movimiento->local_cod = $request->local_cod;
       $movimiento->ase_cod = $request->ase_cod;
       $movimiento->obs_mov = $request->obs_mov;
       $movimiento->save();
       return redirect()->route('movimiento.index')->with('status','guardado');
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
}
