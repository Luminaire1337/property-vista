@extends('layouts.app')

@section('title', config('app.name', 'Property Vista') . ' - Znajdź swoje wymarzone mieszkanie')

@section('styles')
    @vite('resources/scss/pages/welcome.scss')
@endsection

@section('content')
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__title">Znajdź swoje wymarzone mieszkanie</h1>
            <p class="hero__subtitle">Odkryj najlepsze oferty nieruchomości w Twojej okolicy</p>
            <div class="hero__search">
                <form class="hero__form" action="{{ url('/listings') }}" method="GET">
                    <input type="text" placeholder="Wpisz lokalizację..." class="hero__input">
                    <button type="submit">Szukaj</button>
                </form>
            </div>
        </div>
    </section>
@endsection
