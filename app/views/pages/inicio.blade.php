@extends('layout.default')

@section('content')
	<div class="row">
        <div class="col-md-3">
            <ul class="nav nav-tabs nav-stacked">
				<li><a href="#">Agregar facturas</a></li>
				<li><a href="#">Eliminar facturas</a></li>
				<li><a href="#">Modificar facturas</a></li>
			</ul>
        </div>
        <div class="col-md-9">
            <table class="table">
            	<thead>
            		<th>ID</th>
            		<th>N° de Control</th>
            		<th>N° de Factura</th>
            		<th>Nombre</th>
            		<th>Monto</th>
            	</thead>
            </table>
        </div>
    </div>   
@stop


