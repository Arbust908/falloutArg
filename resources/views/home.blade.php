@extends('layouts.app')

@section('title')
| Home
@endsection

@section('content')

<section class="hero">
  <article>
    <img class="hero-img" src="{{ asset('logo-01.svg') }}" alt="Fallout Argentina">
    <h4 class="hero-text ">
      A Fallout setting in the metropolitan city of Buenos Aires for rolplaying.<br>
      My idea is to make cards for almost every component of the game and use this page as rulebook.
    </h4>
    @CTA(['class' => 'btn btn-main'])
    @slot('url')
    {{ route('home') }}
    @endslot
    Suscribe!
    @endCTA
  </article>
</section>

@include('ammo.nav')

<section class="hero">
  <article>
    <img class="hero-img" src="{{ asset('logo-01.svg') }}" alt="Fallout Argentina">
    <h4 class="hero-text ">
      Esto es contenido de prueba Esto es contenido de prueba Esto es contenido de prueba Esto es contenido de prueba Esto es contenido de prueba Esto es contenido de prueba 
    </h4>
    @CTA(['class' => 'btn btn-main'])
    @slot('url')
    {{ route('home') }}
    @endslot
    Esto es contenido de prueba
    @endCTA
  </article>
</section>

@endsection

@section('scripts')

@endsection