@extends('layouts.app')

@section('title')
| {{ $ammo->name }} Ammo Card
@endsection

@section('content')

@include('ammo.nav')

<section class="cards-holder">
  <article class="card card-ammo">
    <a href="{{ url('ammo/'.$ammo->slug) }}">
      <h3>{{ $ammo->name }}</h3>
      <h6>{{ $ammo->weight }}</h6>
      <p>{{ $ammo->description }}</p>
      <img src="{{ $ammo->img }}" alt="{{ $ammo->name }} image">
    </a>
  </article>
</section>

@endsection

@section('scripts')

@endsection