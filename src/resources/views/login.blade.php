@extends('layouts.app')

@section('css')
@endsection

@section('header_button')
<nav>
    <ul class="header-nav">
    <li class="header-nav__item">
        <form class="form" action="/register" method="get">
            <div class="form__button">
                <button class="form__button-submit" type="submit">register</button>
            </div>
        </form>
    </li>
    </ul>
</nav>
@endsection

@section('content')
<div class="category__alert">
  @if (session('message'))
  <div class="category__alert--success">
    {{ session('message') }}
  </div>
  @endif
  @if ($errors->any())
  <div class="category__alert--danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Login</h2>
      </div>
      <form class="form" action="/admin" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>
      </form>
    </div>
@endsection