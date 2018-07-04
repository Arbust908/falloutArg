@extends('layouts.app')

@section('title')
| All Ammo Cards Inactive
@endsection

@section('content')

@include('ammo.nav')

<section class="cards-holder">
  @foreach($ammos as $ammo)
  <article class="card card-ammo">
    <a href="{{ url('ammo/'.$ammo->slug) }}">
      <h3>{{ $ammo->name }}</h3>
      <h6>{{ $ammo->weight }}</h6>
      <p>{{ $ammo->description }}</p>
      <img src="{{ $ammo->img }}" alt="{{ $ammo->name }} image">
    </a>
  </article>
  @endforeach
</section>

@endsection

@section('scripts')

@endsection