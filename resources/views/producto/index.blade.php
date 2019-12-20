
@extends('layouts.app2')

@section('title', 'Listado de Productos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Productos')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>            
                <th>Descripción</th>
                <th>Valor</th>
                <th>Stock</th>
                <th>Proveedor</th>
                <th class="text-center">
                 {{--   @can('isAdmin')--}}
                    <a href="/producto/create" class="btn btn-primary btn-sm" id="nuevo"  
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

            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->prod_cod}}</td>
                    <td>{{$producto->prod_nom}}</td>
                    <td>{{$producto->prod_desc}}</td>
                    <td>{{$producto->prod_valor}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->prov_nom}}</td>
                    <td class="text-center">
                    {{-- @cannot('isAdmin')--}}    
                        <form method="POST" action="/producto/{{$producto->prod_cod}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/producto/{{$producto->prod_cod}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    {{-- @endcannot --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$productos->links()}}	
@endsection
