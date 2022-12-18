@php
    $site_default_title = setting('site.title') . ' - ' . setting('site.description');
    $site_default_description = setting('site.description');
    $site_default_keywords = 'vivaci,living,interior,design,agency,service,mechanical,civil,work';
@endphp

{{-- USE THIS TEMPLATE IN EVERY VIEW
@section('title', '')
@section('meta_keywords', '')
@section('meta_description', '') 
--}}


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}" />

<title>@yield('title', $site_default_title)</title>
<meta name="title" content="@yield('title', $site_default_title)">
<meta name="keywords" content="@yield('meta_keywords', $site_default_keywords)">
<meta name="description" content="@yield('meta_description', $site_default_description)">
<meta name="author" content="vivaciliving">
<meta name="theme-color" content="#F5F5F5">
<meta name="revisit-after" content="7 days">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="url" content="{{ url()->current() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('title', $site_default_title)">
<meta property="og:description"
    content="@yield('meta_description', $site_default_description)">
{{-- <meta property="og:image" content="https://vivaci.miretazam.com/og-image.png"> --}}
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="@yield('title', $site_default_title)">
<meta property="twitter:description"
    content="@yield('meta_description', $site_default_description)">
{{-- <meta property="twitter:image" content="https://vivaci.miretazam.com/og-image.png"> --}}