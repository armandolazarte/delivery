
@if(isset($data))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ $data['mensaje'] }}</p>
    </div>
@endif
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
                <li @if(Request::is('iva/index') || Request::is('iva') ) class="active" @endif><a href="{{URL::to('iva/index')}}">Lista</a></li>
                <li @if(Request::is('iva/create')) class="active" @endif><a href="{{URL::to('iva/create')}}">Agregar</a></li>
                <li @if(Request::is('iva/edit')) class="active" @endif><a href="{{URL::to('iva/edit')}}">Editar</a></li>
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
@if($errors->count()>0)
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>Ocurrieron los siguientes errores:</p>
        <ul>
        @foreach( $errors->all() as $message )
            <li>{{ $message }}</li>
        @endforeach
        </ul>
    </div>
@endif