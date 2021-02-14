@extends('layout.template')

@section('site-title')
    La Molisana
@endsection

@section('page-title')
    Contatti
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    @include('pages.contatti.main')
@endsection

@section('footer')
    @include('layout.footer.footer')
@endsection