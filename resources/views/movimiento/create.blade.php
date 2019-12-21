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
						<small id="dis_codHelp" class="text-danger">{{$errors->first('dis_cod')}}</small>
					</div>

					<div class="form-group">
						<label for="accion">Acción a Realizar</label>
						<select name='acc_cod' class = 'form-control  select2'>
							<option value="">Seleccione uno ... </option>
							@foreach($acciones as $accion)
								<option value = '{{ $accion->acc_cod }}'
									{{(old('acc_cod') == $accion->acc_cod) ? 'selected':''}}>{{$accion->acc_nom}}
								</option>
							@endforeach
						</select>
						<small id="acc_codHelp" class="text-danger">{{$errors->first('acc_cod')}}</small>
					</div>
					
					<div class="form-group">
						<label for="fecha">Fecha</label>
						<input size="16" type="text" class="form-control" id="fecha" name="fecha" readonly
						>
						<small id="fechaHelp" class="text-danger">{{$errors->first('fecha')}}</small>
					</div>

					<div class="form-group">
						<label for="local_cod">Local</label>
						<select name='local_cod' class = 'form-control  select2'>
							<option value="">Seleccione uno ... </option>
							@foreach($locales as $local)
								<option value = '{{ $local->local_cod }}'
									{{(old('local_cod') == $local->local_cod) ? 'selected':''}}>{{$local->local_nom}}
								</option>
							@endforeach
						</select>
						<small id="local_codHelp" class="text-danger">{{$errors->first('local_cod')}}</small>
					</div>

					<div class="form-group">
						<label for="asesor">Asesor</label>
						<select name='ase_cod' class = 'form-control  select2'>
							<option value="">Seleccione uno ... </option>
							@foreach($asesores as $asesor)
								<option value = '{{ $asesor->ase_cod }}'
									{{(old('ase_cod') == $asesor->ase_cod) ? 'selected':''}}>{{$asesor->ase_nom}}
								</option>
							@endforeach
						</select>
						<small id="ase_codHelp" class="text-danger">{{$errors->first('ase_cod')}}</small>
					</div>

					<div class="form-group">
						<label for="obs_mov">Observaciones</label>
						<input type="text" class="form-control" name="obs_mov" id="obs_mov" aria-describedby="obs_movHelp"
						value ={{old('obs_mov')}}>
						<small id="obs_movHelp" class="text-danger">{{$errors->first('obs_mov')}}</small>
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
					$( "#fecha" ).datepicker({
								"dateFormat":'yy-mm-dd'
			    			  });
			    });
			</script>
	<!-- ------------------------------------------>		
	
@endsection


