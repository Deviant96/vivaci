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

<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('title', $site_default_title)">
<meta property="og:description"
    content="@yield('meta_description', $site_default_description)">
{{-- <meta property="og:image" content="https://vivaci.miretazam.com/og-image.png"> --}}
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">


<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="@yield('title', $site_default_title)">
<meta property="twitter:description"
    content="@yield('meta_description', $site_default_description)">
{{-- <meta property="twitter:image" content="https://vivaci.miretazam.com/og-image.png"> --}}


{{-- <meta name="apple-mobile-web-app-capable" content="yes">
<meta name="msapplication-config" content="/browserconfig.xml">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#0068df">
<meta name="apple-mobile-web-app-title" content="Parsinta">
<meta name="application-name" content="Parsinta">
<meta name="msapplication-TileColor" content="#0068df">
<meta name="msapplication-TileImage" content="/favicon/mstile-144x144.png">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2048-2732.jpg"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2732-2048.jpg"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1668-2388.jpg"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2388-1668.jpg"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1536-2048.jpg"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2048-1536.jpg"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1668-2224.jpg"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2224-1668.jpg"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1620-2160.jpg"
    media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2160-1620.jpg"
    media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1284-2778.jpg"
    media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2778-1284.jpg"
    media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1170-2532.jpg"
    media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2532-1170.jpg"
    media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1125-2436.jpg"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2436-1125.jpg"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1242-2688.jpg"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2688-1242.jpg"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-828-1792.jpg"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1792-828.jpg"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1242-2208.jpg"
    media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-2208-1242.jpg"
    media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-750-1334.jpg"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1334-750.jpg"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-640-1136.jpg"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
<link rel="apple-touch-startup-image" href="/favicon/apple-splash-1136-640.jpg"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"> --}}
