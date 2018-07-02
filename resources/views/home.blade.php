@extends('layouts.app')

@section('title')

@endsection

@section('content')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

@endsection

@section('scripts')

@endsection