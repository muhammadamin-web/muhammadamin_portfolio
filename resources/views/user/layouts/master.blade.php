<!DOCTYPE html>
<html lang="uz">
    <head>

        @include('user.layouts.meta')
        @yield('meta')
        
    </head>
    <body>

        <nav>
            @include('user.layouts.navbar')
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <footer>
        @include('user.layouts.footer')
        </footer>
        
        @include('user.layouts.scripts')
        @yield('scripts')

    </body>
</html>