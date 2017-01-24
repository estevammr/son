@extends('layout')

@section('content')
  @foreach($person as $p)
    <div class="col-md-6">
      @include('partials.contato')
    </div>
  @endforeach
@endsection