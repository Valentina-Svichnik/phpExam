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
        <a class="mt-3 mb-3 btn btn-success" href="session/new">Создать сессию</a>
        <table class="table">
          <thead>
            <tr>
              <td>Id</td>
              <td>Название</td>
              <td>Описание</td>
              <td>Стутус</td>
              <td>Действия</td>
            </tr>
          </thead>
          <tbody>
          @foreach($forms as $form)
          <tr>
            <td>{{$form->id}}</td>
            <td>{{$form->name}}</td>
            <td>{{$form->description}}</td>
            <td>{{$form->status}}</td>
            <td>
              <a style="display:inline-block" class="btn" href="{{route('delete', $form->id)}}">Удалить</a>
              @if($form->status != 'Закрыта')
              <a style="display:inline-block" class="btn" href="{{route('close', $form->id)}}">Закрыть</a>
              <a style="display:inline-block" class="btn" href="{{route('qnew', $form->id)}}">Добавить вопрос</a>
              @endif
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection