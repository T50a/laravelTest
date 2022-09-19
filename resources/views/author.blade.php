@extends('layout')

@section('title', 'Авторы')

@section('main_content')
<h1>Авторы</h1>

<form method="post" action="/author/submit">
  @csrf
  <input type="text" name="name" id="id" placeholder="Джорд Оруэлл" class="form-control">
  <br><button type="submit" class="btn btn-success">Найти</button>
</form>
<br>
<h1>Найденные авторы</h1>
@foreach($list as $el)
<div class="container">
  <h3>{{ $el->name }}</h3>
</div>
@endforeach

@endsection