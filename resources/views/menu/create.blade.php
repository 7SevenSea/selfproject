@extends('layouts.app')

@section('content')
<div>
  <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="order">順序</label><input type="text" name="order" id="order">
    <label for="category_id">カテゴリー名</label>
    <select name="category_id" id="category_id">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    <label for="name">メニュー名</label><input type="text" name="name" id="name">
      @if ($errors->has('name'))
      <p class='error'>{{$errors->first('name')}}</p>
      @endif
    <label for="price">価格</label><input type="text" name="price" id="price">
      @if ($errors->has('price'))
      <p class='error'>{{$errors->first('price')}}</p>
      @endif
    <label for="stock">在庫</label>
    <select name="stock" id="stock">
      <option value="1">あり</option>
      <option value="0">なし</option>
    </select>
    <label for="pickup">おすすめ設定</label>
    <select name="pickup" id="pickup">
      <option value="0">しない</option>
      <option value="1">する</option>
    </select>
    <label for="image">商品画像</label><input type="file" name="image" id="image">
      @if ($errors->has('image'))
      <p class='error'>{{$errors->first('image')}}</p>
      @endif
    <input type="submit" value="追加">
  </form>
  <button><a href="{{ route('menu.index') }}">戻る</a></button>
</div>

@endsection
