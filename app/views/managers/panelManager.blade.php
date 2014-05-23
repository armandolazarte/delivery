@include('managers.topMessageManager')
@if(Request::is('entregas*'))
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li @if(Request::is('entregas/tabla')) class="active" @endif><a href="{{URL::to('entregas/tabla')}}">Tabla</a></li>
                <li @if(Request::is('entregas/list')) class="active" @endif><a href="{{URL::to('entregas/list')}}">Lista</a></li>
                <li @if(Request::is('entregas/add')) class="active" @endif><a href="{{URL::to('entregas/add')}}">Agregar</a></li>
            </ul>
            <div class="panel panel-default" style="margin-top: -1px;">
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@elseif(Request::is('iva*'))
     <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li @if(Request::is('iva/index') || Request::is('iva') ) class="active" @endif><a href="{{URL::to('iva')}}">Lista</a></li>
                <li @if(Request::is('iva/create')) class="active" @endif><a href="{{URL::to('iva/create')}}">Agregar</a></li>
                <li @if(Request::is('iva/edit')) class="active" @endif><a href="{{URL::to('iva/edit')}}">Editar</a></li>
                <li @if(Request::is('iva/*') and !Request::is('iva/edit') and !Request::is('iva/create') and !Request::is('iva')) class="active" @endif><a href="{{URL::to('iva/')}}">Comprobante</a></li>
            </ul>
            <div class="panel panel-default" style="margin-top: -1px;">
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@else
    @yield('content')
@endif
@include('managers.errorMessage')