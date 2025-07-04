<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Property Vista'))</title>
    <link rel="icon" href="{{ asset('img/logo-32.png') }}" type="image/png">

    <meta name="description" content="@yield('meta_description', config('app.name', 'Property Vista') . ' - znajdź, sprzedaj lub wynajmij nieruchomość szybko i bezpiecznie. Szeroki wybór mieszkań, domów i działek w całej Polsce.')">
    <meta name="keywords" content="@yield('meta_keywords', 'nieruchomości, mieszkania, domy, wynajem, sprzedaż, ' . config('app.name', 'Property Vista') . ', rynek nieruchomości')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="https://github.com/Luminaire1337">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', config('app.name', 'Property Vista') . ' - Znajdź swoje wymarzone mieszkanie')">
    <meta property="og:description" content="@yield('og_description', 'Znajdź, sprzedaj lub wynajmij nieruchomość szybko i bezpiecznie. Szeroki wybór mieszkań, domów i działek w całej Polsce.')">
    <meta property="og:image" content="@yield('og_image', asset('img/og-image.png'))">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name', 'Property Vista') . ' - Znajdź swoje wymarzone mieszkanie')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Znajdź, sprzedaj lub wynajmij nieruchomość szybko i bezpiecznie. Szeroki wybór mieszkań, domów i działek w całej Polsce.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('img/og-image.png'))">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/scss/layouts/app.scss', 'resources/js/app.js'])
    @yield('styles')
</head>

<body>
    <header class="navbar">
        <div class="navbar__logo">
            <img src="{{ asset('img/logo-64.png') }}" alt="{{ config('app.name', 'Property Vista') }} Logo">
            <span class="navbar__logo-text">{{ config('app.name', 'Property Vista') }}</span>
        </div>
        <nav>
            <ul class="navbar__menu">
                <li class="navbar__menu-item"><a href="{{ url('/') }}">Strona główna</a></li>
                <li class="navbar__menu-item"><a href="{{ url('/listings') }}">Oferty</a></li>
                <li class="navbar__menu-item navbar_menu-item--important"><a href="{{ url('/create-listing') }}">Dodaj
                        ofertę</a></li>
                <li class="navbar__menu-item navbar_menu-item--auth">
                    @auth
                        <a href="{{ url('/dashboard') }}">Panel użytkownika</a>
                    @else
                        <a href="{{ url('/login') }}">Zaloguj się</a>
                    @endauth
                </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="container">
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Property Vista') }}. Wszelkie prawa zastrzeżone.</p>
        <p><a href="{{ url('/polityka-prywatnosci') }}">Polityka prywatności</a> | <a
                href="{{ url('/regulamin') }}">Regulamin</a></p>
    </footer>

    @yield('scripts')
</body>

</html>
