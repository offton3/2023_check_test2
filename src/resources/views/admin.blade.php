@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('header_button')
<nav>
    <ul class="header-nav">
    <li class="header-nav__item">
        <form class="form" action="/login" method="get">
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログアウト</button>
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
<h2>admin</h2>
<div class="category__content">
  <div class="category-table">
    <table class="category-table__inner">
      <tr class="category-table__row">
        <th class="category-table__header">category</th>
      </tr>
      @foreach ($contact as $contacts)
      <tr class="category-table__row">
        <td class="category-table__item">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="first_name" value="{{ $contacts['first_name'] }}">
            </div>
        </td>
        <td class="category-table__item">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="last_name" value="{{ $contacts['last_name'] }}">
            </div>
        </td>
        <td class="category-table__item">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="gender" value="{{ $contacts['gender'] }}">
            </div>
        </td>
        <td class="category-table__item">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="email" value="{{ $contacts['email'] }}">
            </div>
        </td>
        <td class="category-table__item">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="category_id" value="{{ $contacts['category_id'] }}">
            </div>
        </td>
        <td class="category-table__item">
          <form class="delete-form" action="/categories/delete" method="post">
            @method('DELETE')
            @csrf
            <div class="delete-form__button">
              <input type="hidden" name="id" value="{{ $contacts['id'] }}">
              <button class="delete-form__button-submit" type="submit">詳細</button>
            </div>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection