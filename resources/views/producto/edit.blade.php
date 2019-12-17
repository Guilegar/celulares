@extends('layouts.app')

@section('title', 'Actualización de Producto')
@section('title2', 'Actualización de Productos')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/producto/{{$producto->prod_cod}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="prod_nomb">Nombre</label>
							<input type="text" value = '{{$producto->prod_nom}}' class="form-control" name="prod_nom"/>
						</div>
                        <div class="form-group">
							<label for="prod_desc">Descripción</label>
							<input type="text" value = '{{$producto->prod_desc}}' class="form-control" name="prod_desc"/>
						</div>
                        <div class="form-group">
							<label for="prod_valor">Valor</label>
							<input type="text" value = '{{$producto->prod_valor}}' class="form-control" name="prod_valor"/>
						</div>
						<div class="form-group">
							<label for="stock">Stock</label>
							<input type="text" value = '{{$producto->stock}}' class="form-control" name="stock"/>
						</div>
						
						<div class="form-group">
							<label for="prov_cod">Proveedor</label>
							<select name='prov_cod' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($proveedores as $proveedor)
									@if($producto->prov_cod == $proveedor->prov_cod)
										<option selected value = '{{ $proveedor->prov_cod }}'> {{ $proveedor->prov_nom }} </option>
									@else
										<option value = '{{ $proveedor->prov_cod }}'> {{ $proveedor->prov_nom }} </option>
									@endif
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/producto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
