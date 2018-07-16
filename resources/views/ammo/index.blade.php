@extends('layouts.app')

@section('title')
| All Ammo Cards
@endsection

@section('content')

@include('ammo.nav')

<section class="cards-holder">
  @foreach($ammos as $ammo)
  <a href="{{ url('ammo/'.$ammo->item()->slug) }}" class="card card-ammo 
  @if($ammo->item()->status === 0)
  inactive
  @endif
  ">
    <picture>
      <img src="{{ asset($ammo->item()->img) }}" alt="Image of {{ $ammo->item()->name }}">
    </picture>
    <h3>{{ $ammo->item()->name }}</h3>
    <h6>Weight: {{ $ammo->item()->weight }} wp</h6>
    <p>{{ $ammo->item()->description }}</p>
  </a>
  @endforeach
</section>


@include('ammo.nav')

<section class="hero">
  <article>
    <h4 class="hero-text ">
      Items
    </h4>
    <div class="pre">
      @forEach($items as $item)
      <div class="cosas" style="background-color:{{ $item->rarity->color }}">
        <h6>{{ $item->name }}</h6>
        <p>Slug: {{ $item->slug }}</p>
        <p>Weight: {{ $item->weight }}</p>
        <p>Rare ID: {{ $item->rarity_id }}</p>
        <p>Desc :{{ $item->description }}</p>
        <p>Effect: {{ $item->effect }}</p>
        <p>Img :{{ $item->img }}</p>
        <p>Status: {{ $item->status }}</p>
        <p>itemabled ID: {{ $item->itemable_id }}</p>
        <p>itemabled Type: {{ $item->itemable_type }}</p>
        <p>Created: {{ $item->created_at }}</p>
        <p>Updated: {{ $item->updated_at }}</p>
        <p>Itemize: {{ $item->itemable}}</p>
        {{-- <pre>
          @dump($item)
          @dump($item->rarity)
        </pre> --}}
        <p>Rarity: {{ $item->rarity->name }}</p>
        {{--
        --}}
      </div>
      @endforEach
    </div>
  </article>
</section>

@endsection

@section('scripts')

@endsection