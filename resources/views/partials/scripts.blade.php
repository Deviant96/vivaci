@if (isset($imageZoom) === true)
    @include('components.imagezoom')
@endif



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<script>
    const navbar = document.querySelector('nav'); 
    window.onscroll = () => {
        if (window.scrollY > 300) {
            navbar.classList.add('nav-active');
        } else {
            navbar.classList.remove('nav-active');
        }
    };
</script>

@yield('scripts')
