<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
        <ul class="nav navbar-nav navbar-right">
        	<li  @if(Request::is('home/*')) class="active" @endif><a href="{{URL::to('home')}}">Inicio</a></li>
        	<li  @if(Request::is('entregas/*')) class="active" @endif><a href="{{URL::to('entregas')}}">Entregas</a></li>
        	<li  @if(Request::is('ventas/*')) class="active" @endif><a href="{{URL::to('ventas')}}">Libro de ventas</a></li>
        	<li  @if(Request::is('compras/*')) class="active" @endif><a href="{{URL::to('compras')}}">Libro de compras</a></li>
        	<li  @if(Request::is('creditos/*')) class="active" @endif><a href="{{URL::to('creditos')}}">Débitos y Créditos</a></li>
        </ul>
    </div>
</nav>