@extends('layouts.app2')

@section('title', 'Creación de Local')

@section('title2', 'Nuevo Local')

@section('content')

	<div class="row" >
	<div class="col-sm">
	  
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/local" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="local_nom">Local</label>
						<input type="text" class="form-control" name="local_nom" id="local_nom" aria-describedby="localHelp"
						value ={{old('local_nom')}}>
						<small id="localcodHelp" class="form-text text-muted">{{$errors->first('local_nom')}}</small>
					</div>
					<div class="form-group">
						<label for="local_dir">Dirección</label>
						<input type="text" class="form-control" name="local_dir" id="local_dir" aria-describedby="localHelp"
						value ={{old('local_dir')}}>
						<small id="localdirHelp" class="form-text text-muted">{{$errors->first('local_dir')}}</small>
					</div>
					<div class="form-group">
						<label for="local_tel">Telefono</label>
						<input type="text" class="form-control" name="local_tel" id="local_tel" aria-describedby="localHelp"
						value ={{old('local_dir')}}>
						<small id="localtelHelp" class="form-text text-muted">{{$errors->first('local_tel')}}</small>
					</div>
					

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


