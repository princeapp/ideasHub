<html>
    <head>
        @include('includes.meta')
        
    </head>
    <body>
       @include('includes.navbar')

        <div class="container">
            @yield('content')
        </div>
        @include('includes.footer')
    </body>
</html>