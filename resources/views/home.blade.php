@extends('layout')

@section('title', 'Главная')

@section('main_content')
<h1>Главная</h1>
@foreach($shows as $el)
<div class="container">
  <h3>{{ $el->name }}</h3>
  <h4>{{ $el->title }}</h4>
</div>
@endforeach
@endsection