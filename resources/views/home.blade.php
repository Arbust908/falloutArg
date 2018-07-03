@extends('layouts.app')

@section('title')
| Home
@endsection

@section('content')

<section class="hero">
  <h1 class="hero-title ">Fallout Arg</h1>
  <h4 class="hero-text ">
    A Fallout setting in the metropolitan city of Buenos Aires for rolplaying.
    My idea is to make cards for almost every component of the game and use this page as rulebook.
  </h4>
  @CTA(['class' => 'main'])
    @slot('url')
      {{ route('home') }}
    @endslot
    Suscribe!
  @endCTA
</section>

@endsection

@section('scripts')

@endsection