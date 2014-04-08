@extends('layout.default')
@extends('includes.entregas_navbar')
@section('entregas_content')
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar Entregas</h3>
			</div>
			<div class="panel-body">
				<form class="form" role="form">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="entrega_factura"><small>Número de factura</small></label>
								<input type="number" id="entrega_factura" name="entrega_factura" class="form-control" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_cliente"><small>Número de cliente</small></label>			
								<input type="number" id="entrega_cliente" name="entrega_cliente" class="form-control" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_monto"><small>Monto sin IVA</small></label>						
								<input type="number" id="entrega_monto" name="entrega_monto" class="form-control" placeholder="">			
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="entrega_factura"><small>Fecha de facturación</small></label>
								<input type="date" id="entrega_factura" name="entrega_factura" class="form-control" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_chofer"><small>Chofer</small></label>					
								<select class="form-control" id="entrega_chofer">
									<option>Jesus David Mastracci</option>
									<option>Marco Vilera</option>
									<option>Javier Carvallo</option>
									<option>Eleazar Guía</option>
									<option>Mauricio Gonzales</option>
								</select>						
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

@stop
