@include('layout.footer')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('layout.head')

    <body>

            @include('layout.navbar')

            @yield('conteudo')
        <div class="container">
            @yield('footer')
        </div>
    </body>
</html>