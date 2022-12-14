<header>
    <nav class="navbar navbar-expand-lg bg-transparent" style="height: 90px;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                @if (setting('site.logo'))
                    {{ setting('site.logo') }}
                @else
                    {{ setting('site.title') }}
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                {{ menu('main', 'main_menu') }}
                <div class="nav-but-wrap">
                    <div class="menu-icon hover-target">
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>