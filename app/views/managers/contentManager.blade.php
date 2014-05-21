@if(Request::is('iva*')||Request::is('entregas*'))
	@include('includes.navbar')
	<div class="container">
		@include('includes.header')
		@include('managers.panelManager')
		@include('includes.footer')
	</div>
@elseif(Request::is('pdf*'))
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><strong>IMPORTADORA LA VILLA DE LAS MASCOTAS, C.A.</strong></h4>
				<h5>Calle Sanoja con Av. Stadium, Qta. La Casita, Los Chaguaramos, Caracas, Venezuela.</h5>
				<h5>Teléfono: 0212-693.28.37 - RIF: J-29630539-0</h5>
			</div>
			<div class="panel-body">
				<br />
				@yield('content')
				<br />
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-xs-4 col-xs-offset-2">Agente de retención:</div>
					<div class="col-xs-4 col-xs-offset-2">Agente retenido:</div>
				</div>
			</div>
		</div>
		
	</div>
@else
	@yield('content')
@endif	



