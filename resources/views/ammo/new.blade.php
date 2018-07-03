@extends('layouts.app')

@section('title')
| New Ammo Card
@endsection

@section('content')

@include('ammo.nav')

<section class="cards-holder">
  <article class="card card-ammo">
    <a href="#">
      <input type="text"> <h3> name </h3>
      <input type="text"> <h6> weight </h6>
      <input type="text"> <p> description </p>
      <input type="text"><img src="{{ asset('img/FoT_Bend_the_Rules.png') }}" alt="Placeholder image">
    </a>
  </article>
</section>

@endsection

@section('scripts')

@endsection