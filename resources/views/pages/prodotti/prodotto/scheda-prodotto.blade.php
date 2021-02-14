@extends('layout.template')

@section('site-title')
    La Molisana
@endsection

@section('page-title')
    {{$prodotto['titolo']}}
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    <main class="scheda-prodotto">
        @include('pages.prodotti.prodotto')
        <div class="info">
            <h2>{{$prodotto['titolo']}}</h2>
            {!! $prodotto['descrizione'] !!} {{-- mi permette di integrare tag html nel testo --}}
        </div>
    </main>
@endsection

@section('footer')
    @include('layout.footer.footer')
@endsection

