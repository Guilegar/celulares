@extends('layouts.app')

@section('title', 'Creación de Asesor')

@section('title2', 'Nuevo Asesor')

@section('content')

	<div class="row" >
	<div class="col-sm">
	  
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/asesor" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="ase_id">Cedula</label>
						<input type="text" class="form-control" name="ase_id" id="ase_id" aria-describedby="ase_idHelp"
						value ={{old('ase_id')}}>
						<small id="ase_idHelp" class="form-text text-muted">{{$errors->first('ase_id')}}</small>
					</div>
									
					<div class="form-group">
						<label for="ase_nom">Nombre</label>
						<input type="text" class="form-control" name="ase_nom" id="ase_nom" aria-describedby="ase_nomlHelp"
						value ={{old('ase_nom')}}>
						<small id="ase_nomHelp" class="form-text text-muted">{{$errors->first('ase_nom')}}</small>
					</div>
					<div class="form-group">
						<label for="ase_dir">Dirección</label>
						<input type="text" class="form-control" name="ase_dir" id="ase_dir" aria-describedby="ase_dirlHelp"
						value ={{old('ase_dir')}}>
						<small id="ase_dirHelp" class="form-text text-muted">{{$errors->first('ase_dir')}}</small>
					</div>
					<div class="form-group">
						<label for="ase_tel">Telefono</label>
						<input type="text" class="form-control" name="ase_tel" id="ase_tel" aria-describedby="ase_telHelp"
						value ={{old('ase_tel')}}>
						<small id="ase_telHelp" class="form-text text-muted">{{$errors->first('ase_tel')}}</small>
					</div>
					<div class="form-group">
						<label for="est_nom">Estado</label>
						<select name='est_cod' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($estados as $estado)
								<option value = '{{ $estado->est_cod }}'
									{{(old('est_cod') == $estado->est_cod) ? 'selected':''}}>{{$estado->est_desc}}
								</option>
							@endforeach
						</select>
						{!!$errors->first('est_cod', '<div class="alert alert-danger" role ="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


