@extends('layouts.app')

@section('content')
<div class="category-edit">
  <div class="category-edit-container">
    <h1>カテゴリー編集</h1>
      <div class="category-edit-form">
        <form action="{{ route('category.update',$category->id) }}" method="post">
          @csrf
          @method("PUT")
          <div>
            <label for="order">順序</label>
            <input type="text" name="order" id="order" value="{{ $category->order }}">
              @if ($errors->has('name'))
              <p class='error'>{{$errors->first('name')}}</p>
              @endif
          </div>
          <div>
            <label for="name">カテゴリー名</label>
            <input type="name" name="name" id="name" value="{{ $category->name }}">
          </div>
          <div>
            <button><a href="{{ route('category.index') }}">戻る</a></button>
          </div>
          <div>
            <input type="submit" value="更新">
          </div>
        </form>
      </div>
  </div>
</div>

@endsection
