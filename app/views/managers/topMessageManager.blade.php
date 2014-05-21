@if(Session::has('ivaSuccess'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>Se creó correctamente la retención a la factura</p>
    </div>
@endif
@if(isset($data))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ $data['mensaje'] }}</p>
    </div>
@endif