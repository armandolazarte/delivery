@if(Request::is('entregas*'))
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
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
@if ( $errors->count() > 0 )
    <p>The following errors have occurred:</p>
    <ul>
    @foreach( $errors->all() as $message )
        <li>{{ $message }}</li>
    @endforeach
    </ul>
@endif