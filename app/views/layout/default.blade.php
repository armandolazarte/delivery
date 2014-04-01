<!doctype html>
<html lang="en">
	<head>
		@include('includes.head')
	</head>
    <body>
        @include('includes.navbar')

        <div class="container">
            @include('includes.header')
            <div class="row">
                <div class="col-md-2">
                hola mundo
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>            
            @include('includes.footer')
        </div>
    </body>
    @include('includes.js')
</html>