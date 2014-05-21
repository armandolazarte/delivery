@if(Request::is('iva*')||Request::is('entregas*'))
	@include('includes.panelManager')
@else
	@yield('content')
@endif