@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
@endpush

@section('content')
<div class="game-card">
    <img src="{{ asset('images/games/cs.jpg') }}" alt="CS" class="game-image">
    <h3>Game Name</h3>
    <p>Game Description</p>
    <p>Game Price</p>
    <button class="button">Comprar</button>
</div>
@endsection
