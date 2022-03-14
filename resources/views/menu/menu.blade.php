@extends('layouts.app')

@section('content')
<div class="menu">
    <div class="menu-title">
        <h1>メニュー管理画面</h1>
        <table class="menu-table">
            <tr>
                <th>順序</th>
                <th>画像</th>
                <th>メニュー名</th>
                <th>おすすめ</th>
                <th>在庫</th>
                <th>価格</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
            @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>
                    @if($menu->image)
                        <img class="menu_image" src="{{ asset('storage/menu_image/' . $menu->image) }}">
                    @else
                        <img class="menu_image" src="{{ asset('menu_images/No_image.png') }}">
                    @endif
                </td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->pickup }}</td>
                <td>{{ $menu->stock }}</td>
                <td>{{ $menu->price }}</td>
                <td><button><a href="{{ route('menu.edit',$menu->id) }}">編集</a></button></td>
                <td>
                    <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="" value="削除" onclick="return confirm('このメニューを削除します。よろしいでしょうか？')">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div>
            <button><a href="{{ route('home') }}">戻る</a></button>
            <button><a href="{{ route('menu.create') }}">メニュー追加</a></button>
        </div>
    </div>
</div>

@endsection
