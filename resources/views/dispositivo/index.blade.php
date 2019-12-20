
@extends('layouts.app2')

@section('title', 'Listado de Dispositivos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Celulares')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>IMEI</th>            
                <th>IMEI2</th>
                <th>Color</th>
                <th>Producto</th>
                
                <th class="text-center">
                 {{--   @can('isAdmin')--}}
                    <a href="/dispositivo/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Producto">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                  {{--  @endcan --}}
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($dispositivos as $dispositivo)
                <tr>
                    <td>{{$dispositivo->dis_cod}}</td>
                    <td>{{$dispositivo->imei}}</td>
                    <td>{{$dispositivo->imei2}}</td>
                    <td>{{$dispositivo->color}}</td>
                    <td>{{$dispositivo->prod_nom}}</td>
                    <td class="text-center">
                    {{-- @cannot('isAdmin')--}}    
                        <form method="POST" action="/dispositivo/{{$dispositivo->dis_cod}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/dispositivo/{{$dispositivo->dis_cod}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    {{-- @endcannot --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$dispositivos->links()}}	
@endsection
