@extends('layout.default')
@section('content')
	@if(isset($tabla_iva))
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre del beneficiario</th>
							<th>N° Factura</th>
							<th>Acciones</th>
						</tr>
					</thead>
					@foreach($tabla_iva as $itemIva)
					<tr>
						<td>{{{$itemIva->id}}}</td>
						<td>{{{$itemIva->beneficiario_nombre}}}</td>
						<td>{{{$itemIva->nro_factura}}}</td>
						<td>{{{$itemIva->created_at}}}</td>
						<td><a href="{{{URL::to('iva/'.$itemIva->id)}}}" class="btn btn-primary">Comprobante</a></td>
					</tr>
					@endforeach
				</table>
		</div>	
	</div>
	<div class="row">
		<div class="col-md-10 text-center">
			{{$tabla_iva->links()}}	
		</div>
	</div>
	@endif
@stop