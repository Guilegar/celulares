@extends('layouts.app2')

@section('title', 'Actualización de Producto')
@section('title2', 'Actualización de Información Celulares')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/dispositivo/{{$dispositivo->dis_cod}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="imei">Imei 1</label>
							<input type="text" value = '{{$dispositivo->imei}}' class="form-control" name="imei"/>
						</div>
                        <div class="form-group">
							<label for="imei2">Imei 2</label>
							<input type="text" value = '{{$dispositivo->imei2}}' class="form-control" name="imei2"/>
						</div>
                        <div class="form-group">
							<label for="color">Color</label>
							<input type="text" value = '{{$dispositivo->color}}' class="form-control" name="color"/>
						</div>
						
						<div class="form-group">
							<label for="prod_cod">Producto</label>
							<select name='prod_cod' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($productos as $producto)
									@if($dispositivo->prod_cod == $producto->prod_cod)
										<option selected value = '{{ $producto->prod_cod }}'> {{ $producto->prod_nom }} </option>
									@else
										<option value = '{{ $producto->prod_cod }}'> {{ $producto->prod_nom }} </option>
									@endif
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/dispositivo" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
