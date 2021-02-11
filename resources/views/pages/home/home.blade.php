@extends('layout.template')

@section('site-title')
    La Molisana
@endsection

@section('page-title')
    Home
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    @include('pages.home.main')
@endsection