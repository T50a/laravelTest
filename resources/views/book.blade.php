@extends('layout')

@section('title', 'Авторы')

@section('main_content')
<h1>Книги</h1>

<form method="post" action="/book/submit">
  @csrf
  <input type="text" name="name" id="id" placeholder="1984" class="form-control">
  <br><button type="submit" class="btn btn-success">Найти</button>
</form>
<br>
<h1>Найденные книги</h1>
@foreach($shows as $el)
<div class="container">
  <h3>{{ $el->title }}</h3>
</div>
@endforeach

@endsection