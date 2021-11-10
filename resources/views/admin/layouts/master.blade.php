<!DOCTYPE html>
<html lang="uz">
    <head>

        @include('admin.layouts.meta')
        @yield('meta')
        
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

        @include('admin.layouts.scripts')
        @yield('scripts')

    </body>
</html>