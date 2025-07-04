@extends('layouts.app')

@section('title', config('app.name', 'Property Vista') . ' - Znajdź swoje wymarzone mieszkanie')

@section('styles')
    @vite('resources/scss/pages/welcome.scss')
@endsection

@section('content')
    <section>
        <h2>Znajdź swoją idealną nieruchomość</h2>
        <p>Property Vista to nowoczesny portal nieruchomości, który pomaga znaleźć wymarzone mieszkanie, dom lub
            działkę.</p>
    </section>

    <section>
        <h2>Najnowsze oferty</h2>
    </section>
@endsection
