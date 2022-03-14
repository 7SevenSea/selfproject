@extends('layouts.app')

@section('content')

<div class="create-form">
  <h1>カテゴリー追加画面</h1>
  <form action="{{ route('category.store') }}" method="post">
    <div class="create-order">
      <label for="order">順序</label>
      <input type="text" name="order" id="order">
    </div>
    <div class="create-name">
      <label for="name">カテゴリー名</label>
      <input type="text" name="name" id="name">
        @if ($errors->has('name'))
        <p class='error'>{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="button-box">
      <button><a href="{{ route('category.index') }}">戻る</a></button>
      <input type="submit" value="追加" onclick="return confirm('このカテゴリーを追加します')">
    </div>
    @csrf
  </form>
</div>

@endsection
