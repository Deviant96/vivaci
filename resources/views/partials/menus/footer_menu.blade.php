@php
    
    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }
    
@endphp

@foreach ($items as $item)

        <a href="{{ url($item->link()) }}" target="{{ $item->target }}"
            class="hover-target">
            <span>{{ $item->title }}</span>
        </a>
@endforeach
