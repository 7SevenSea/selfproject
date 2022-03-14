@extends('layouts.app')

@section('content')
<div class="category">
  <div class="category-container">
    <h1>カテゴリー管理画面</h1>
      <table class="category-table">
        <tr>
          <th>順序</th>
          <th>カテゴリー名</th>
          <th>編集</th>
          <th>削除</th>
        </tr>
          @foreach ($categories as $category)
        <tr>
          <td>{{ $category->order }}</td>
          <td>{{ $category->name }}</td>
          <td><button><a href="{{ route('category.edit',$category->id) }}">編集</a></button></td>
          <td><form method="post" action="{{ route('category.destroy', $category->id) }}">
          @csrf
          @method('delete')
          <input type="submit" value="削除" onclick="return confirm('このカテゴリーを削除します。よろしいでしょうか？')">
          </form></td>
        </tr>
          @endforeach
      </table>
    <div>
      <button><a href="{{ route('home') }}">戻る</a></button>
    </div>
    <div>
      <button><a href="{{ route('category.create') }}">カテゴリー追加</a></button>
    </div>
  </div>
</div>

@endsection
