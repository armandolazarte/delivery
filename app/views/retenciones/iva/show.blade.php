@extends('layout.default')
@section('content')
	@if(isset($ivaRetencionData))
		<div class="row">
			<div class="col-xs-6">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 panel panel-default">
						<div class="panel-body">
							<h6><strong>Nombre o razón social:</strong></h6>
							<p>Importadora La Villa de las Mascotas, C.A.</p>
						</div>
					</div>			
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 panel panel-default">
						<div class="panel-body">
							<h6><strong>Dirección agente de retención:</strong></h6>
							<p>Calle Sanoja, Qta. La Casita, Los Chaguaramos, Zona postal 1020, Caracas.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 panel panel-default">
						<div class="panel-body">
							<h6><strong>Nombre o razón social del sujeto retenido:</strong></h6>
							<p>{{{$ivaRetencionData->beneficiario_nombre}}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="row">
					<div class="col-xs-7 panel panel-default">
						<div class="panel-body">
						<h6><strong>Número de comprobante:</strong></h6>
						<p>{{{$ivaRetencionData->id_comprobante}}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-5 panel panel-default">
						<div class="panel-body">
							<h6><strong>Fecha Elaboración:</strong></h6>
							<p>{{{date('d-m-Y',strtotime($ivaRetencionData->created_at))}}}</p>
						</div>
					</div>
					<div class="col-xs-5 col-xs-offset-1 panel panel-default">
						<div class="panel-body">
							<h6><strong>Fecha Entrega:</strong></h6>
							<p>{{{date('d-m-Y',strtotime($ivaRetencionData->created_at))}}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-5 panel panel-default">
						<div class="panel-body">
							<h6><strong>RIF Agente Retencion</strong></h6>
							<p>{{{$ivaRetencionData->agente_rif}}}</p>
						</div>
					</div>
					<div class="col-xs-5 col-xs-offset-1 panel panel-default">
						<div class="panel-body">
							<h6><strong>RIF Sujeto Retenido</strong></h6>
							<p>{{{$ivaRetencionData->rif_beneficiario}}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<table class="table table-condensed table-bordered table-striped">
						<thead>
						<tr>
							<th class="text-center"><small>#</small></th>
							<th class="text-center"><small>Fecha Factura</small></th>
							<th class="text-center"><small>Nro. Factura</small></th>
							<th class="text-center"><small>Nro. Control</small></th>
							<th class="text-center"><small>Nro. Nota Deb.</small></th>
							<th class="text-center"><small>Nro. Nota Cred.</small></th>
							<th class="text-center"><small>Nro. Fact. Afectada</small></th>
							<th class="text-center"><small>Tipo transacción</small></th>
							<th class="text-center"><small>Total incluyendo IVA</small></th>
							<th class="text-center"><small>Compras sin derecho a Crédito IVA</small></th>
							<th class="text-center"><small>Base Imponible</small></th>
							<th class="text-center"><small>% Alicuota</small></th>
							<th class="text-center"><small>IVA</small></th>
							<th class="text-center"><small>IVA Retenido</small></th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center">
								<td>{{{$ivaRetencionData->id}}}</td>
								<td>{{{date('d-m-Y',strtotime($ivaRetencionData->fecha_facturacion))}}}</td>
								<td>{{{$ivaRetencionData->nro_factura}}}</td>
								<td>{{{$ivaRetencionData->nro_control}}}</td>
								<td></td>
								<td></td>
								<td></td>
								<td>01-Reg</td>
								<td>{{{number_format($ivaRetencionData->monto_total,2,',','.').' Bs.'}}}</td>
								<td>0</td>
								<td>{{{number_format($ivaRetencionData->monto_base,2,',','.').' Bs.'}}}</td>
								<td>{{{$ivaRetencionData->alicuota.'%'}}}</td>
								<td>{{{number_format($ivaRetencionData->monto_base*0.12,2,',','.').' Bs.'}}}</td>
								<td>{{{number_format($ivaRetencionData->iva_retenido,2,',','.').' Bs.'}}}</td>
							</tr>					
						</tbody>
						<tfoot>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	@endif
@stop
