
@extends('layouts.app')

@section('title', 'Listado de Asesores')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Asesores')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Cedula</th>            
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Estado en Sistema</th>
                <th class="text-center">
                 {{--   @can('isAdmin')--}}
                    <a href="/asesor/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Asesor">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                  {{--  @endcan --}}
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($asesores as $asesor)
                <tr>
                    <td>{{$asesor->ase_cod}}</td>
                    <td>{{$asesor->ase_id}}</td>
                    <td>{{$asesor->ase_nom}}</td>
                    <td>{{$asesor->ase_dir}}</td>
                    <td>{{$asesor->ase_tel}}</td>
                    <td>{{$asesor->est_desc}}</td>
                    <td class="text-center">
                    {{-- @cannot('isAdmin')--}}    
                        <form method="POST" action="/asesor/{{$asesor->ase_cod}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/asesor/{{$asesor->ase_cod}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    {{-- @endcannot --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$asesores->links()}}	
@endsection
