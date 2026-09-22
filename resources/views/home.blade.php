<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IPMS | Intellectual Property Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero_carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home_sections.css') }}">
</head>

<body
    data-toast-type="{{ e(session('toast_type') ?? 'success') }}"
    data-toast-message="{{ e(session('toast_message') ?? '') }}"
>

    @include('partials.home.navbar')

    <main>
        @include('partials.home.hero')
        @include('partials.home.about')
        @include('partials.home.features')
        @include('partials.home.how-it-works')
        @include('partials.home.cta')
    </main>

    @include('partials.home.patent-modals')
    @include('partials.home.footer')

    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="{{ asset('js/side-nav.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
</body>
</html>