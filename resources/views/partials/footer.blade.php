<footer class="bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-4 order-3 order-sm-1 mt-5 mt-sm-0">
                <h4 class="fw-bold text-light">{{ setting('site.title') }}</h4>
                <p class="text-muted">Copyrights © {{ date("Y") }}<br>
                    All Rights Reserved by <span class="text-uppercase">{{ setting('site.title') }}</span></p>
            </div>
            <div class="col-12 col-sm-4 d-flex justify-content-sm-center order-1 order-sm-2">
                @include('components.socials-footer');
            </div>
            <div class="col-12 col-sm-4 d-sm-flex flex-column justify-content-end align-items-end order-2 order-sm-3 mt-3 mt-sm-0">
                <div class="d-flex flex-sm-wrap flex-row gap-3 justify-content-sm-end text-light" style="width:150px">
                    {{ menu('main', 'partials.menus.footer_menu') }}
                </div>
                <div class="mt-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-2">Connect With Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>