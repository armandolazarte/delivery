<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
        <ul class="nav navbar-nav navbar-right">
          	<li><a href="index.html">Inicio</a></li>
          	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Libros <b class="caret"></b></a>
          		<ul class="dropdown-menu">
            		<li><a href="{{URL::to('ventas')}}">Libro de venta</a></li>
            		<li><a href="{{URL::to('compras')}}">Libro de compra</a></li>
            		<li><a href="{{URL::to('debitos')}}">Débitos y Créditos</a></li>
          		</ul>
        	</li>
        	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a>
          		<ul class="dropdown-menu">
            		<li><a href="#">Libro de venta</a></li>
            		<li><a href="#">Libro de compra</a></li>
            		<li><a href="#">Débitos y Créditos</a></li>
          		</ul>
        	</li>
        	<li><a href="index.html">Soporte</a></li>
        </ul>
    </div>
</nav>