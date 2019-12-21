@extends('layouts.app')

@section('title', 'Creación de Producto')

@section('title2', 'Nuevo Producto')

@section('content')

	<div class="row" >
	<div class="col-sm">
	  
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/producto" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="prod_nom">Nombre</label>
						<input type="text" class="form-control" name="prod_nom" id="prod_nom" aria-describedby="prod_nomlHelp"
						value ={{old('prod_nom')}}>
						<small id="prod_nomHelp" class="form-text text-muted">{{$errors->first('prod_nom')}}</small>
					</div>
					<div class="form-group">
						<label for="prod_desc">Descripción</label>
						<input type="text" class="form-control" name="prod_desc" id="prod_desc" aria-describedby="prod_desclHelp"
						value ={{old('prod_desc')}}>
						<small id="prod_descHelp" class="form-text text-muted">{{$errors->first('prod_desc')}}</small>
					</div>
					<div class="form-group">
						<label for="prod_valor">Valor</label>
						<input type="text" class="form-control" name="prod_valor" id="prod_valor" aria-describedby="prod_valorHelp"
						value ={{old('prod_valor')}}>
						<small id="prod_valorHelp" class="form-text text-muted">{{$errors->first('prod_valor')}}</small>
					</div>
					<div class="form-group">
						<label for="stock">Stock</label>
						<input type="text" class="form-control" name="stock" id="stock" aria-describedby="stockHelp"
						value ={{old('stock')}}>
						<small id="stockHelp" class="form-text text-muted">{{$errors->first('stock')}}</small>
					</div>

					<div class="form-group">
						<label for="prov_nom">Proveedor</label>
						<select name='prov_cod' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($proveedores as $proveedor)
								<option value = '{{ $proveedor->prov_cod }}'
									{{(old('prov_cod') == $proveedor->prov_cod) ? 'selected':''}}>{{$proveedor->prov_nom}}
								</option>
							@endforeach
						</select>
						{!!$errors->first('prov_cod', '<div class="alert alert-danger" role ="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/producto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


