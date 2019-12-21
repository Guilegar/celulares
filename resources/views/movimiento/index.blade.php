
@extends('layouts.app2')

@section('title', 'Listado de Movimientos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Movimiento de Celulares')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover table-sm" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Producto</th>            
                <th>Color</th>
                <th>Imei 1</th>
                <th>Imei 2</th>
                <th>Fecha</th>
                <th>Acciòn</th>
                <th>Local</th>
                <th>Asesor</th>
                <th>Observ.</th>
                <th class="text-center">
                 {{--   @can('isAdmin')--}}
                    <a href="/movimiento/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Registro">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                  {{--  @endcan --}}
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($movimientos as $movimiento)
                <tr>
                    <td>{{$movimiento->movi_cod}}</td>
                    <td>{{$movimiento->prod_nom}}</td>
                    <td>{{$movimiento->color}}</td>
                    <td>{{$movimiento->imei}}</td>
                    <td>{{$movimiento->imei2}}</td>
                    <td>{{$movimiento->fecha}}</td>
                    <td>{{$movimiento->acc_nom}}</td>
                    <td>{{$movimiento->local_nom}}</td>
                    <td>{{$movimiento->ase_nom}}</td>
                    <td>{{$movimiento->obs_mov}}</td>
                    <td class="text-center">
                    {{-- @cannot('isAdmin')--}}    
                        <form method="POST" action="/movimiento/{{$movimiento->movi_cod}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                           <!-- <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>-->				
                        </form>
                      {{--  <a href="/movimiento/{{$movimiento->movi_cod}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>--}}
                    {{-- @endcannot --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$movimientos->links()}}	
@endsection
