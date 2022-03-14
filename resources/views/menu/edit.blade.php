@extends('layouts.app')

@section('content')
<div class="edit">
    <div class="edit-title">
        <h1>メニュー編集画面</h1>
        <div class="edit-form">
            <form action="{{ route('menu.update',$menu->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="order">順序</label>
                    <input type="text" name="order" id="order" value="{{ $menu->order }}">
                </div>
                <div>
                    <label for="category_id">カテゴリー名</label>
                    <select name="category_id" id="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id === $menu->category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="name">メニュー名</label>
                    <input type="text" name="name" id="name" value="{{ $menu->name }}">
                        @if ($errors->has('name'))
                        <p class='error'>{{$errors->first('name')}}</p>
                        @endif
                </div>
                <div>
                    <label for="price">価格</label>
                    <input type="text" name="price" id="price" value="{{ $menu->price }}">
                        @if ($errors->has('price'))
                        <p class='error'>{{$errors->first('price')}}</p>
                        @endif
                </div>
                <div>
                    <label for="stock">在庫</label>
                    <select name="stock" id="stock">
                        <option value="1"@if($menu->stock == '1') selected @endif>あり</option >
                        <option value="0"@if($menu->stock == '0') selected @endif>なし</option>
                    </select>
                </div>
                <div>
                    <label for="pickup">おすすめ設定</label>
                    <select name="pickup" id="pickup">
                        <option value="1"@if($menu->pickup == '1') selected @endif>する</option>
                        <option value="0"@if($menu->pickup == '0') selected @endif>しない</option>
                    </select>
                </div>

                <div>
                    <label for="image">商品画像</label>
                    <input type="file" name="image" id="image" value="{{ $menu->image }}">
                        @if ($errors->has('image'))
                        <p class='error'>{{$errors->first('image')}}</p>
                        @endif
                </div>
                <input type="submit" value="編集">
            </form>
            <div>
                <button><a href="{{ route('menu.index') }}">戻る</a></button>
            </div>
        </div>
    </div>
</div>

@endsection
