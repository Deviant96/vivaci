<footer class="bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-4">
                <h4 class="fw-bold text-light">{{ setting('site.title') }}</h4>
                <p class="text-muted">Copyrights © {{ date("Y") }}<br>
                    All Rights Reserved by <span class="text-uppercase">{{ setting('site.title') }}</span></p>
            </div>
            <div class="col-4 d-flex justify-content-center">
                @include('components.socials-footer');
            </div>
            <div class="col-4 d-flex flex-column justify-content-end align-items-end">
                <div class="d-flex flex-wrap flex-row gap-3 justify-content-end text-light" style="width:150px">
                    {{ menu('main', 'partials.menus.footer_menu') }}
                </div>
                <div class="mt-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-2">Connect With Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>