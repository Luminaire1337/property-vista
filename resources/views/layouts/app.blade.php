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

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @yield('styles')
</head>

<body>
    <header>
        <h1>{{ config('app.name', 'Property Vista') }} - Twój portal nieruchomości</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Strona główna</a></li>
                <li><a href="{{ url('/mieszkania') }}">Mieszkania</a></li>
                <li><a href="{{ url('/domy') }}">Domy</a></li>
                <li><a href="{{ url('/dzialki') }}">Działki</a></li>
                <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Property Vista') }}. Wszelkie prawa zastrzeżone.</p>
        <p><a href="{{ url('/polityka-prywatnosci') }}">Polityka prywatności</a> | <a
                href="{{ url('/regulamin') }}">Regulamin</a></p>
    </footer>

    @yield('scripts')
</body>

</html>
