<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        	<div class="row mt-5">
            	@yield('content')
        	</div>
        </div>
    </body>
</html>

