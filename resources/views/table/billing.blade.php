@extends('layouts.app')

@section('content')
<span>会計待ち一覧</span>
<a href="{{ route('order.index') }}"><button>オーダー管理画面</button></a>
<p>テーブル一覧</p>
  @foreach($tableList as $table)
    @if($table->status === 0)
      <a href="{{ route('table.index', ['table' => $table->table]) }}">
        <button>テーブル{{ $table->table }}</button>
      </a>
    @elseif($table->status ===1)
    <a href="{{ route('table.billing.show', ['table' => $table->id]) }}">
      <button class="payment" style="background-color:yellow">テーブル{{ $table->table }}</button>
    </a>
    @endif
  @endforeach
<table>
  <tr>
    <th>席番号</th>
    <th>客番号</th>
  </tr>
  @foreach($payers as $payer)
  <tr>
    <td>{{ $payer->table }}
    </td>
    <td>{{ $payer->id}}</td>
  </tr>
  @endforeach
</table>
@endsection
