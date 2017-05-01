@extends('main')
@section('title', '- Home')
@section('content')
@include('pages.home.nav')
  <div class="container">
    @include('pages.home.jumbotron')
    @include('pages.home.newsfeed')
  </div>
@endsection
