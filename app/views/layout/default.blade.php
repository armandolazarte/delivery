<!doctype html>
<html lang="en">
	<head>
		@include('includes.head')
	</head>
    <body>
        @include('includes.navbar')
        <div class="container">
            @include('includes.header')
            @include('includes.content_switch')
            @include('includes.footer')
        </div>
    </body>
    @include('includes.js')
</html>