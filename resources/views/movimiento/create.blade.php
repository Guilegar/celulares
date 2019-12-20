@extends('layouts.app')

@section('title', 'Registro de Movimientos')

@section('title2', 'Nuevo Movimiento')

@section('content')

	<div class="row" >
	<div class="col-sm">
	  
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/movimiento" accept-charset="UTF-8" style="display:inline">
					@csrf			
					
					<div class="form-group">
						<label for="imei">Imei 1</label>
						<select name='dis_cod' class = 'form-control  select2'>
							<option value="">Seleccione uno ... </option>
							@foreach($dispositivos as $dispositivo)
								<option value = '{{ $dispositivo->dis_cod }}'
									{{(old('dis_cod') == $dispositivo->dis_cod) ? 'selected':''}}>{{$dispositivo->imei}}
								</option>
							@endforeach
						</select>
						{!!$errors->first('dis_cod', '<div class="alert alert-danger" role ="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="stock">Fecha</label>
						<input size="16" type="text" class="form-control" id="fecha" name="fecha" readonly
						>
						<small id="stockHelp" class="form-text text-muted">{{$errors->first('fecha')}}</small>
					</div>


					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>

	<!-- Librerias para Select2-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
			<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
			
            
			

			<script>
			// In your Javascript (external .js resource or <script> tag)
				$(document).ready(function() {
				$('.select2').select2();
			});
			</Script>	
	<!-- ------------------------------------------>
           
	<!-- Librerias para Datapicker-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		 
		   <script>
			$( function() {
			$( "#fecha" ).datepicker();
			} );
			</script>
	<!-- ------------------------------------------>		
	
@endsection


