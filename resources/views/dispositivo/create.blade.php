@extends('layouts.app')

@section('title', 'Creación de Dispositivo')

@section('title2', 'Nuevo Registro de Celular')

@section('content')

	<div class="row" >
	<div class="col-sm">
	  
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/dispositivo" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="imei">Imei 1</label>
						<input type="text" class="form-control" name="imei" id="imei" aria-describedby="imeiHelp"
						value ={{old('imei')}}>
						<small id="imeiHelp" class="form-text text-muted">{{$errors->first('imei')}}</small>
					</div>
					<div class="form-group">
						<label for="imei2">Imei 2</label>
						<input type="text" class="form-control" name="imei2" id="imei2" aria-describedby="imei2lHelp"
						value ={{old('prod_desc')}}>
						<small id="imei2Help" class="form-text text-muted">{{$errors->first('imei2')}}</small>
					</div>
					<div class="form-group">
						<label for="color">Color</label>
						<input type="text" class="form-control" name="color" id="color" aria-describedby="colorHelp"
						value ={{old('color')}}>
						<small id="colorHelp" class="form-text text-muted">{{$errors->first('color')}}</small>
					</div>
					<div class="form-group">
						<label for="prod_nom">Producto</label>
						<select name='prod_cod' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($productos as $producto)
								<option value = '{{ $producto->prod_cod }}'
									{{(old('prod_cod') == $producto->prod_cod) ? 'selected':''}}>{{$producto->prod_nom}}
								</option>
							@endforeach
						</select>
						{!!$errors->first('prod_cod', '<div class="alert alert-danger" role ="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/dispositivo" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


