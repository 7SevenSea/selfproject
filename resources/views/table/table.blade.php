@extends('layouts.app')

@section('content')
<div class="table-container">
  <div>
    <button type="button" onClick="history.back()">戻る</button>
    <h1>テーブル管理画面</h1>
    <button><a href="{{ route('table.billing') }}">会計待ち一覧</a></button>
  </div>
  <div class="table-list">
    <p>テーブル一覧</p>
    @foreach ($tableList as $table)
    <button><a href="{{ route('table.index', ['table' => $table->id]) }}">テーブル{{ $table->table }}</a></button>
    @endforeach
  </div>
  <div class="table-list">
    <table>
      <tr>
        <th>席番号</th>
        <th>注文時間</th>
        <th>品名</th>
        <th>状態</th>
      </tr>
      @foreach ($tableOrders as $tableOrder)
      <tr>
        <td>{{ $tableOrder->table }}</td>
        <td>{{ $tableOrder->created_at }}</td>
        <td>{{ $tableOrder->menu->name }}</td>
        @if($tableOrder->is_finished)
        <td>提供済</td>
        @else
        <td style="color:red">未提供</td>
        @endif
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection
