@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default panel-success">
			<div class="panel-heading ">
				<h3 class="panel-title">Agregar retencion de IVA</h3>
			</div>
			<div class="panel-body">
				{{Form::open(array('action'=>'IvaController@store','class'=>'form'))}}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="iva_rif_beneficiario"><small>RIF del Beneficiario</small></label>
								<input type="text" id="iva_rif_beneficiario" name="rif_beneficiario" class="form-control" placeholder="Ejemplo: J296305390">	
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="iva_factura"><small>Número de factura</small></label>
										<input type="number" id="iva_factura" name="nro_factura" class="form-control" placeholder="Ejemplo: 00001234">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="iva_control"><small>Número de control</small></label>			
										<input type="text" id="iva_control" name="nro_control" class="form-control" placeholder="Ejemplo: 00-00001234">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="iva_year"><small>Año</small></label>
										<input type="number" id="iva_year" name="year" class="form-control" placeholder="Ejemplo: 1984">			
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="iva_month"><small>Mes</small></label>			
										<input type="number" id="iva_month" name="month" class="form-control" placeholder="Ejemplo: 12">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="iva_date_fact"><small>Fecha de facturación</small></label>
								<input type="date" id="iva_date_fact" name="date_fact" class="form-control" value="" placeholder="Ejemplo: 01/12/1984">	
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="iva_rif_agente"><small>RIF Agente de Retencion</small></label>
								<input type="text" id="iva_rif_agente" name="rif_agente" class="form-control" placeholder="" value="J296305390">	
							</div>
							<div class="form-group">
								<label class="control-label" for="iva_comprobante"><small>Número de comprobante</small></label>
								<input type="number" id="iva_comprobante" name="numero_comprobante" class="form-control" placeholder="">	
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="iva_alicuota"><small>Tasa IVA</small></label>
										<input type="number" id="iva_alicuota" name="tasa_iva" class="form-control" placeholder="">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="iva_tasa_retencion"><small>Tasa Retencion</small></label>
										<input type="number" id="iva_tasa_retencion" name="tasa_retencion" class="form-control" placeholder="">	
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="iva_base_imponible"><small>Base imponible</small></label>
								<input type="number" id="iva_base_imponible" name="base_imponible" class="form-control" placeholder="">	
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