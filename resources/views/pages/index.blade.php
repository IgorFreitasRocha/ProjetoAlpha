@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    @include('partials.banner')
    @include('partials.categories')
    @include('partials.card')

@endsection

