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
                <div class="col-md-2"></div>
                    @yield('content')
                <div class="col-md-10"></div>
            </div>            
            @include('includes.footer')
        </div>
    </body>
    @include('includes.js')
</html>