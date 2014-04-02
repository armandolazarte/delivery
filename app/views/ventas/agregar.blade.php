@extends('layout.default')

@section('content')
        <div>
            <ul class="nav nav-tabs">
				<li class="active"><a href="#">Agregar facturas</a></li>
				<li><a href="#">Eliminar facturas</a></li>
				<li><a href="#">Modificar facturas</a></li>
			</ul>
        <div>
        <div class="panel panel-default" style="margin-top: -1px;">
            <div class="panel-body">
            <form role="form" class="form form-horizontal well">
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_rif">RIF: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_rif" id="form_ventas_rif">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_nombre">Razón social: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_nombre" id="form_ventas_nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_control">Número de control: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_control" id="form_ventas_control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_factura">Número de factura: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_factura" id="form_ventas_factura">
                    </div> 
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_fecha_fact">Fecha de facturación: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_fecha_fact" id="form_ventas_fecha_fact">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_reg_maq">Nº Registro de máquina: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_reg_maq" id="form_ventas_reg_maq">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_nota_deb">Nº Nota de débito: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_nota_deb" id="form_ventas_nota_deb">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-muted" for="form_ventas_nota_cred">Nº Nota de crédito: </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-sm" name="ventas_nota_cred" id="form_ventas_nota_cred">
                    </div>
                </div>
            </form>
            </div>
        </div>   
@stop