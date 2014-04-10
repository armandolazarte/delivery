@extends('layout.default')
@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<th>Nombre del Conductor</th>
				<th>Enero</th>
				<th>Febrero</th>
				<th>Marzo</th>
				<th>Abril</th>
				<th>Mayo</th>
				<th>Junio</th>
				<th>Julio</th>
				<th>Agosto</th>
				<th>Septiembre</th>
				<th>Octubre</th>
				<th>Noviembre</th>
				<th>Diciembre</th>
			</thead>
			<tbody>
				@foreach($choferes as $chofer)
				<tr>
					<td>{{$chofer['nombre']}}</td>
					<td>{{$chofer['enero']}}</td>
					<td>{{$chofer['febrero']}}</td>
					<td>{{$chofer['marzo']}}</td>
					<td>{{$chofer['abril']}}</td>
					<td>{{$chofer['mayo']}}</td>
					<td>{{$chofer['junio']}}</td>
					<td>{{$chofer['julio']}}</td>
					<td>{{$chofer['agosto']}}</td>
					<td>{{$chofer['septiembre']}}</td>
					<td>{{$chofer['octubre']}}</td>
					<td>{{$chofer['noviembre']}}</td>
					<td>{{$chofer['diciembre']}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop