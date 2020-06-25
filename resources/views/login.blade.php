@extends('layouts.app')

@section('title')
  Login
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h1 class="mt-5 mb-4">Войдите как администратор</h1>
        <form action="{{route('login-submit')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" if="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Войти</button>
        </form>
      </div>
    </div>
  </div>
@endsection