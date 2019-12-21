@extends('layouts.app')

@section('title', 'Actualización de Asesor')
@section('title2', 'Actualización de Asesores')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/asesor/{{$asesor->ase_cod}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="ase_id">Cedula</label>
							<input type="text" value = '{{$asesor->ase_id}}' class="form-control" name="ase_id"/>
						</div>
                        <div class="form-group">
							<label for="ase_nom">Nombre</label>
							<input type="text" value = '{{$asesor->ase_nom}}' class="form-control" name="ase_nom"/>
						</div>
                        <div class="form-group">
							<label for="ase_dir">Dirección</label>
							<input type="text" value = '{{$asesor->ase_dir}}' class="form-control" name="ase_dir"/>
						</div>
						<div class="form-group">
							<label for="stock">Telefono</label>
							<input type="text" value = '{{$asesor->ase_tel}}' class="form-control" name="ase_tel"/>
						</div>
						
						<div class="form-group">
							<label for="est_cod">Estado</label>
							<select name='est_cod' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($estados as $estado)
									@if($asesor->est_cod == $estado->est_cod)
										<option selected value = '{{ $estado->est_cod }}'> {{ $estado->est_desc }} </option>
									@else
										<option value = '{{ $estado->est_cod }}'> {{ $estado->est_desc }} </option>
									@endif
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
