@extends('layouts.app')

@section('title')
| New Ammo Card
@endsection

@section('content')

@include('ammo.nav')

<section class="cards-holder">
  <article class="card card-ammo">
    <input type="text"> <h3> name </h3>
    <input type="text"> <h6> weight </h6>
    <input type="text"> <p> description </p>
    <input type="text"><img src="{{ asset('img/FoT_Bend_the_Rules.png') }}" alt="Placeholder image">
  </article>
</section>

{!! Form::open(array('route' => 'ammo.store', 'data-parsley-validate' => '', 'files' => true)) !!}
{{ Form::label('name', 'Name:') }}
{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

{{ Form::label('weight', 'Weight:') }}
{{ Form::numeric('weight', null, array('class' => 'form-control', 'required' => '') ) }}

{{ Form::label('description', "Description:") }}
{{ Form::textarea('description', null, array('class' => 'form-control','required' => '')) }}

{{ Form::label('img', 'Upload a Image') }}
{{ Form::file('img','required' => '') }}


{{ Form::submit('Create Ammo Card', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

@endsection

@section('scripts')

@endsection