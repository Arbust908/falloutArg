@extends('layouts.app')

@section('title')
| All Ammo Cards
@endsection

@section('content')

@include('ammo.nav')

<section class="cards-holder">
  @foreach($ammos as $ammo)
  <a href="{{ url('ammo/'.$ammo->slug) }}" class="card card-ammo 
  @if($ammo->status === 0)
  inactive
  @endif
  ">
    <picture>
      <img src="{{ asset($ammo->img) }}" alt="Image of {{ $ammo->name }}">
    </picture>
    <h3>{{ $ammo->name }}</h3>
    <h6>Weight: {{ $ammo->weight }} wp</h6>
    <p>{{ $ammo->description }}</p>
  </a>
  @endforeach
</section>

@endsection

@section('scripts')

@endsection