@if ( $errors->count() > 0 )
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
@if (isset($data))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ $data['mensaje'] }}</p>
    </div>
@endif
@if(Request::is('entregas*'))
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                {{HTML::navbar_link("entregas/index",'Índice')}}
                {{HTML::navbar_link("entregas/list",'Listar')}}
                {{HTML::navbar_link("entregas/add",'Agregar')}}
                {{HTML::navbar_link("entregas/delete",'Eliminar')}}
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
