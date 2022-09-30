<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @yield('css')
      
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            @yield('topo')
           
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                 @yield('sidebar')
                                   
            </div>
            <div class="col">
                 @yield('content')
               @show
            </div>
        </div>
        <section id="footer">
        <footer>
        <div class="row">
            <div class="col">
                @yield('footer')
                
            </div>
        </div>
        </footer>
        </section>

    </div>
    @yield('javascript')
  
   
    </body>
</html>