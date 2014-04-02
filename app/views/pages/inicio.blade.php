@extends('layout.default')

@section('content')
	<div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">Agregar facturas</a></li>
				<li><a href="#">Eliminar facturas</a></li>
				<li><a href="#">Modificar facturas</a></li>
			</ul>
        </div>
        <div class="col-md-9">
            <table class="table table-stripped table-condensed">
            	<thead>
            		<th>ID</th>
            		<th>N° de Control</th>
            		<th>N° de Factura</th>
            		<th>Nombre</th>
            		<th>Monto</th>
            	</thead>
            	<tbody>
            		<tr>
            			<td>1</td>
            			<td>45000</td>
            			<td>48999</td>
            			<td>Importadora La Villa de las Mascotas, C.A.</td>
            			<td>45.000</td>
            		</tr>
            	</tbody>
            	<tfoot>
            	</tfoot>
            </table>
        </div>
    </div>   
@stop


