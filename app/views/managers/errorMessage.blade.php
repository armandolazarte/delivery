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