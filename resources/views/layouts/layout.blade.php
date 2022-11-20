<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
<body>
    
    @include('partials.nav')

    @include('components.whatsapp')

    <main>
        <div class="main">

            @yield('content')

        </div>
    </main>
    
    @include('partials.footer')

    @include('partials.scripts')
    
</body>
</html>