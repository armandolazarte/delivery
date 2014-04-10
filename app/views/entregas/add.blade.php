@extends('layout.default')
@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar Entregas</h3>
			</div>
			<div class="panel-body">
				{{Form::open(array('action'=>'EntregasController@postAdd','class'=>'form'))}}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="entrega_factura"><small>Número de factura</small></label>
								<input type="number" id="entrega_factura" name="fact_profit_id" class="form-control" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_cliente"><small>Número de cliente</small></label>			
								<input type="number" id="entrega_cliente" name="client_profit_id" class="form-control" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_monto"><small>Monto sin IVA</small></label>						
								<input type="number" id="entrega_monto" name="monto" class="form-control" placeholder="">			
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_compania"><small>Compañía</small></label>
								<select class="form-control" id="entrega_compania" name="compania_id">
									<option value="1" @if((isset($data))&&($data["compania_id"]=="1")) selected="selected" @endif >Importadora La Villa de las Mascotas</option>
									<option value="2" @if((isset($data))&&($data["compania_id"]=="2")) selected="selected" @endif>Comercializadora Villas Cat Litle</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="entrega_factura"><small>Fecha de facturación</small></label>
								<input type="date" id="entrega_factura" name="fecha_entrega" class="form-control" value="{{\Carbon\Carbon::now()}}" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_tasa"><small>Tasa</small></label>
								<input type="number" id="entrega_tasa" name="tasa" class="form-control" value="1" placeholder="">	
							</div>
							<div class="form-group">
								<label class="control-label" for="entrega_chofer"><small>Chofer</small></label>					
								<select class="form-control" id="entrega_chofer" name="chofer_id">
									<option value="1" @if((isset($data))&&($data['chofer_id']=="1")) selected="selected" @endif>Jesus David Mastracci</option>
									<option value="2" @if((isset($data))&&($data['chofer_id']=="2")) selected="selected" @endif>Marco Vilera</option>
									<option value="3" @if((isset($data))&&($data['chofer_id']=="3")) selected="selected" @endif>Javier Carvallo</option>
									<option value="4" @if((isset($data))&&($data['chofer_id']=="4")) selected="selected" @endif>Eleazar Guía</option>
									<option value="5" @if((isset($data))&&($data['chofer_id']=="5")) selected="selected" @endif>Mauricio Gonzales</option>
									<option value="6" @if((isset($data))&&($data['chofer_id']=="6")) selected="selected" @endif>Diego Villalobos</option>

								</select>						
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@stop
