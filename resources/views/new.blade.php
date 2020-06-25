@extends('layouts.app')

@section('title')
  Panel
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-12">
        <h1 class="mt-5 mb-4">Создание новой сессии</h1>
        <form action="{{route('submit')}}" method="get">
          <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description" class="form-control">
          </div>
          <input type="hidden" name="status" id="status" value="Открыта">
          <button type="submit" class="mt-3 btn btn-success">Создать</button>
        </form>
      </div>
    </div>
  </div>
@endsection