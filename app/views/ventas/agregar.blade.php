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
            <form role="form" class="form form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2" for="form_ventas_rif">RIF</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ventas_rif" id="form_ventas_rif">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="form_ventas_nombre">Nombre o razón social</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ventas_nombre" id="form_ventas_nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="form_ventas_control">Número de control</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ventas_control" id="form_ventas_control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="form_ventas_factura">Número de factura</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ventas_factura" id="form_ventas_factura">
                    </div> 
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="form_ventas_fecha_fact">Fecha de facturación</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ventas_fecha_fact" id="form_ventas_fecha_fact">
                    </div>
                </div>
            </form>
        </div>
    </div>   
@stop
