@extends('layouts.app')

@section('content')
<div class="bg-animation"></div>
<div class="bg-animation bg-animation2"></div>
<div class="bg"></div>
<h1 class="home-text">HOME</h1>
<div class="button-wrap">
  <div class="button-box">
    <a class="menu-text" href="{{ route('order.index') }}">オーダー<br>管理画面</a>
  </div>
  <div class="button-box">
    <a class="menu-text" href="{{ route('table.show') }}">テーブル<br>管理画面</a>
  </div>
  <div class="button-box">
    <a class="menu-text" href="{{ route('category.index') }}">カテゴリ<br>一覧</a>
  </div>
  <div class="button-box">
    <a class="menu-text" href="{{ route('menu.index') }}">メニュー<br>一覧</a>
  </div>
  <div class="button-box">
    <a class="menu-text" href="{{ route('customer.create') }}">注文<br>開始</a>
  </div>
</div>
@endsection
