@extends('layouts.app')

@section('content')
<div class="order-container">
  <div>
    <button><a href="{{ route('home') }}">戻る</a></button>
    <h1>オーダー管理画面</h1>
    <button><a href="{{ route('table.billing') }}">会計待ち一覧</a></button>
  </div>
  <div class="table-list">
    <p>テーブル一覧</p>
    @foreach ($tableList as $table)
    <button><a href="{{ route('table.index', ['table' => $table->id]) }}">テーブル{{ $table->table }}</a></button>
    @endforeach
  </div>
  <div class="order-list">
    <table>
      <tr>
        <th>席番号</th>
        <th>注文時間</th>
        <th>品名</th>
        <th>状態</th>
      </tr>
      @foreach ($orders as $order)
      <tr>
        <td>{{ $order->table }}</td>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->menu->name }}</td>
        @if($order->is_finished)
        <td>提供済</td>
        @else
        <td ><button><a href="{{ route('finished.order', $order->id) }}" onclick="return confirm('提供が完了しましたか？')">未提供</a></button></td>
        @endif
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection
