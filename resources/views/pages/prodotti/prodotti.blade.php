@extends('layout.template')

@section('site-title')
    La Molisana
@endsection

@section('page-title')
    Prodotti
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    @include('pages.prodotti.main')
@endsection

@section('footer')
    @include('layout.footer.footer')
@endsection
