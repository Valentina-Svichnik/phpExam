@extends('layouts.app')

@section('title')
  Panel
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-12">
        <h1 class="mt-5 mb-4">Панель администратора</h1>
        <h2>Список созданных экспертных сессий</h2>
        <button class="btn btn-success" href="{{route('session')}}">Создать сессию</button>
      </div>
    </div>
  </div>
@endsection