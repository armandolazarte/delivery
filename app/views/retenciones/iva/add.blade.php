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
							<div @if($errors->has('beneficiarion_nombre')) class="form-group has-error" @else class="form-group" @endif>
								<label class="control-label" for="iva_beneficiarion_nombre"><small>Nombre del Beneficiario</small></label>
								<input type="text" id='iva_beneficiarion_nombre' name="beneficiario_nombre" class="form-control" placeholder="Ejemplo: Superpet shop, C.A." value={{{ Input::old('beneficiario_nombre') }}}>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div @if($errors->has('rif_beneficiario')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_rif_beneficiario"><small>RIF del Beneficiario</small></label>
										<input type="text" id="iva_rif_beneficiario" name="rif_beneficiario" class="form-control" placeholder="Ejemplo: J296305390" @if($errors->count()>0) value="{{{ Input::old('rif_beneficiario') }}}" @endif>	
									</div>
								</div>
								<div class="col-md-6">
									<div @if($errors->has('fecha_facturacion')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_date_fact"><small>Fecha de facturación</small></label>
										<input type="date" id="iva_date_fact" name="date_fact" class="form-control" placeholder="Ejemplo: 01/12/1984" @if($errors->count()>0) value="{{{ Input::old('date_fact') }}}" @endif>	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div @if($errors->has('nro_factura')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_factura"><small>Número de factura</small></label>
										<input type="number" id="iva_factura" name="nro_factura" class="form-control" placeholder="Ejemplo: 00001234" @if($errors->count()>0) value="{{{ Input::old('nro_factura') }}}" @endif>	
									</div>
								</div>
								<div class="col-md-6">
									<div @if($errors->has('nro_control')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_control"><small>Número de control</small></label>			
										<input type="text" id="iva_control" name="nro_control" class="form-control" placeholder="Ejemplo: 00-00001234" @if($errors->count()>0) value="{{{ Input::old('nro_control') }}}" @endif>	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div @if($errors->has('periodo')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_year"><small>Año</small></label>
										<input type="number" id="iva_year" name="year" class="form-control" placeholder="Ejemplo: 1984" @if($errors->count()>0) value="{{{ Input::old('year') }}}" @endif>			
									</div>
								</div>
								<div class="col-md-6">
									<div @if($errors->has('periodo')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_month"><small>Mes</small></label>			
										<input type="number" id="iva_month" name="month" class="form-control" placeholder="Ejemplo: 12" @if($errors->count()>0) value="{{{ Input::old('month') }}}" @endif>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div @if($errors->has('rif_agente')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_rif_agente"><small>RIF Agente de Retencion</small></label>
										<input type="text" id="iva_rif_agente" name="rif_agente" class="form-control" placeholder="" @if($errors->count()>0) value="{{{ Input::old('rif_agente') }}}" @else value="J296305390" @endif>	
									</div>
								</div>
								<div class="col-md-6">
									<div @if($errors->has('id_comprobante')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_comprobante"><small>Número de comprobante</small></label>
										<input type="text" id="iva_comprobante" name="numero_comprobante" class="form-control" placeholder="Ejemplo: 20140100001234" @if($errors->count()>0) value="{{{ Input::old('numero_comprobante') }}}" @endif>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div @if($errors->has('alicuota')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_alicuota"><small>Tasa IVA</small></label>
										<input type="text" id="iva_alicuota" name="tasa_iva" class ="form-control" placeholder="Ejemplo: 12" @if($errors->has('alicuota')) value="{{{ Input::old('tasa_iva') }}}" @else value="12" @endif>	
									</div>
								</div>
								<div class="col-md-6">
									<div @if($errors->has('alicuota')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_tasa_retencion"><small>Tasa Retencion</small></label>
										<input type="text" id="iva_tasa_retencion" name="tasa_retencion" class="form-control" placeholder="Ejemplo: 75" value="75">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div @if($errors->has('monto_base')) class="form-group has-error" @else class="form-group" @endif>
										<label class="control-label" for="iva_base_imponible"><small>Base imponible</small></label>
										<input type="text" id="iva_base_imponible" name="base_imponible" class="form-control" placeholder="Ejemplo: 10123,34" @if($errors->count()>0) value="{{{ Input::old('base_imponible') }}}" @else value"12" @endif>	
									</div>
								</div>
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