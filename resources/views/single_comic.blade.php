@extends('layouts.app')
{{-- Richiamiamo il titolo della pagina --}}

@section('page_title')
    Single comic
@endsection



{{-- Scriviamo gli elementi del main --}}
@section('main_content')
{{-- Inserisco il Jumbo --}}
    <div class="jumbo"></div>
{{-- Lavoriamo sugli elementi del main --}}

{{-- Galleria che avrà l'immagine di copertina e il toogle alla home --}}
<div class="galleria ">
    <img src="{{ $single_comic['thumb'] }}" alt="Prova image">
    <div id="tipologia">{{ $single_comic['type'] }}</div>
    <a href="#" id="back_to_gallery"> View gallery </a>
</div>
{{-- SINGLE COMIC DETAILS --}}
    <div class="single-comic-container">        
        <section>
            {{-- Titolo --}}
            <h2>{{ $single_comic['title'] }}</h2>
            {{-- Tabella prezzo --}}
            <div class="tabella">
                <div class="prezzo">
                    <h4>U.S. Price: <span> {{ $single_comic['price'] }} </span> </h4>
                </div>
                <div class="stato"> Aviable </div>

                <div class="check">
                    <h4>Check availability</h4>
                </div>
            </div>
            {{-- Descrizione --}}
            <p>{{ $single_comic['description'] }}</p>





        </section> 
    </div>   
@endsection