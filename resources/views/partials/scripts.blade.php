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

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
      offset: 200,
      duration: 1000,
      easing: 'ease-in-out-quart',
      delay: 100,
      once: true,
    });
</script>

@yield('scripts')
