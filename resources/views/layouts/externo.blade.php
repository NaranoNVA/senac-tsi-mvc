<html>
    <head>  <title>@yield('title')</title>  </head>
    <body>
        @section('sidebar')
        <h1>Barrinha susperior top </h1>

        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
