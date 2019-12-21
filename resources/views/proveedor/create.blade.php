@extends('layouts.app2')

@section('title', 'Creación de Proveedor')

@section('title2', 'Nuevo Proveedor')

@section('content')

	<div class="row" >
	<div class="col-sm">
	  
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/proveedor" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="prov_id">Nit/Cedula</label>
						<input type="text" class="form-control" name="prov_id" id="prov_id" aria-describedby="localHelp"
						value ={{old('prov_id')}}>
						<small id="providHelp" class="form-text text-muted">{{$errors->first('prov_id')}}</small>
					</div>
					<div class="form-group">
						<label for="prov_nom">Nombre</label>
						<input type="text" class="form-control" name="prov_nom" id="prov_nom" aria-describedby="provHelp"
						value ={{old('prov_nom')}}>
						<small id="provnomHelp" class="form-text text-muted">{{$errors->first('prov_nom')}}</small>
					</div>
					<div class="form-group">
						<label for="prov_dir">Dirección</label>
						<input type="text" class="form-control" name="prov_dir" id="prov_dir" aria-describedby="provHelp"
						value ={{old('prov_dir')}}>
						<small id="proveedordirHelp" class="form-text text-muted">{{$errors->first('prov_dir')}}</small>
					</div>
					<div class="form-group">
						<label for="prov_tel">Telefono</label>
						<input type="text" class="form-control" name="prov_tel" id="prov_tel" aria-describedby="provHelp"
						value ={{old('prov_dir')}}>
						<small id="proveedortelHelp" class="form-text text-muted">{{$errors->first('prov_tel')}}</small>
					</div>
					

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


