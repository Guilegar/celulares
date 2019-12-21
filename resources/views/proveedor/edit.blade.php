@extends('layouts.app')

@section('title', 'Actualización de Proveedor')
@section('title2', 'Actualización de Proveedor')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/proveedor/{{$proveedor->prov_cod}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="prov_id">Nit/Cedula</label>
							<input type="text" value = '{{$proveedor->prov_id}}' class="form-control" name="prov_id"/>
						</div>
                        <div class="form-group">
							<label for="prov_nom">Nombre</label>
							<input type="text" value = '{{$proveedor->prov_nom}}' class="form-control" name="prov_nom"/>
						</div>
                        <div class="form-group">
							<label for="prov_dir">Dirección</label>
							<input type="text" value = '{{$proveedor->prov_dir}}' class="form-control" name="prov_dir"/>
						</div>
						<div class="form-group">
							<label for="prov_tel">Telefono</label>
							<input type="text" value = '{{$proveedor->prov_tel}}' class="form-control" name="prov_tel"/>
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
