@extends('layout.default')
@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">

	<table class="table">
		<thead>
			<th>Fact N°</th>
			<th>Cliente N°</th>
			<th>Monto</th>
			<th>Fecha</th>
			<th>Conductor</th>
		</thead>
		<tbody>
		@foreach($items as $item)
			<tr>
				<td>{{$item->fact_profit_id}}</td>
				<td>{{$item->client_profit_id}}</td>
				<td>{{$item->monto}}</td>
				<td>{{$item->fecha_entrega}}</td>
				<td>{{$item->chofer_id}}</td>
			</tr>
		@endforeach
		</tbody>

		<tfoot>
		
		</tfoot>
	</table>
	
	</div>
</div>
<div class="row">
	<div class="col-md-10 text-center">
		{{$items->links()}}	
	</div>
</div>
@stop