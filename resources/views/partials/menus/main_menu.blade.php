<div class="nav-top">
    <div class="nav-top__content">
        <ul class="nav-top__list">

    
            @php

                if (Voyager::translatable($items)) {
                    $items = $items->load('translations');
                }

            @endphp

            @foreach ($items as $item)

                @php

                    $originalItem = $item;
                    if (Voyager::translatable($item)) {
                        $item = $item->translate($options->locale);
                    }

                    $isActive = null;
                    $styles = null;
                    $icon = null;

                    // Background Color or Color
                    if (isset($options->color) && $options->color == true) {
                        $styles = 'color:'.$item->color;
                    }
                    if (isset($options->background) && $options->background == true) {
                        $styles = 'background-color:'.$item->color;
                    }

                    // Check if link is current
                    if(url($item->link()) == url()->current()){
                        $isActive = ' active-nav';
                    }

                    // Set Icon
                    if(isset($options->icon) && $options->icon == true){
                        $icon = '<i class="' . $item->icon_class . '"></i>';
                    }

                @endphp

                <li class="nav-top__list-item{{ $isActive }}">
                    <a href="{{ url($item->link()) }}" 
                        target="{{ $item->target }}" 
                        style="{{ $styles }}" 
                        class="hover-target"
                        aria-current="<?php $isActive ? "page" : ""; ?>">
                        {!! $icon !!}
                        <span>{{ $item->title }}</span>
                    </a>
                    @if(!$originalItem->children->isEmpty())
                        <span class="dropdown"></span>
                        @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])
                    @endif
                </li>
            @endforeach

        </ul>
    </div>
</div>		