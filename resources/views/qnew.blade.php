@extends('layouts.app')

@section('title')
  New Question
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-12">
        <h1 class="mt-5 mb-4">Создание нового вопроса</h1>
        <form action="{{route('qsubmit')}}" method="get">
          <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description" class="form-control">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Тип ответа</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Число</option>
                <option>Положительное число</option>
                <option>Строка</option>
                <option>Текст</option>
                <option>С единственным выбором</option>
                <option>С множественным выбором</option>
              </select>
            </div>
          <button type="submit" class="mt-3 btn btn-success">Создать</button>
        </form>
      </div>
    </div>
  </div>
@endsection