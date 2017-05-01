@extends('main')
@section('title', '- Home')
@section('content')
@include('pages.welcome.nav')
  <div class="container">
    @include('pages.welcome.jumbotron')
    @include('pages.welcome.newsfeed')
  </div>
@endsection
