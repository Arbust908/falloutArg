@extends('layouts.app')

@section('title')
Frequently Asked Questions |
@endsection

@section('content')

<section class="faq">
  <header class="faq-title">
    <h1>Frequently Asked Questions</h1>
    <img class="faq-img" src="{{ asset('logo-01.svg') }}" alt="Fallout Argentina">
  </header>
  <section class="faqs">
    <article class="faqs">
      <h4 class="question">  </h4>
      <p class="answer">  </p>
    </article>
  </section>
</section>

@endsection

@section('scripts')

@endsection