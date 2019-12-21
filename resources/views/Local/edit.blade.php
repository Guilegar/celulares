@extends('layouts.app2')

@section('title', 'Actualización de Local')
@section('title2', 'Actualización de Local')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/local/{{$local->local_cod}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="local_nom">Local</label>
							<input type="text" value = '{{$local->local_nom}}' class="form-control" name="local_nom"/>
						</div>
						<div class="form-group">
							<label for="local_dir">Dirección</label>
							<input type="text" value = '{{$local->local_dir}}' class="form-control" name="local_dir"/>
						</div>
						<div class="form-group">
							<label for="local_tel">Telefono</label>
							<input type="text" value = '{{$local->local_tel}}' class="form-control" name="local_tel"/>
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
