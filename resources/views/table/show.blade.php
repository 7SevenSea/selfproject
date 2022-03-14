@extends('layouts.app')

@section('content')
<div>
  <div>
    <h1>会計画面</h1>
      <table>
        <tr>
          <th>品名</th>
          <th>金額</th>
        </tr>
          @foreach ($customer->orders as $order)
        <tr>
          <td>{{ $order->menu->name }}</td>
          <td>{{ $order->menu->price }}円</td>
          @csrf
        </tr>
          @endforeach
      </table>
      <div>
        <form action="{{ route('table.complete', $table) }}" method="post">
          @csrf
          @method('PUT')
          <div>
            <label for="total">合計金額</label>
            <input type="text" name="total" id="total" value="{{ $customer->total_price }}">円
          </div>
          <div>
            <input type="submit" value="会計完了する">
          </div>
          <div>
            <button type="button" onClick="history.back()">戻る</button>
          </div>
        </form>
      </div>
  </div>
</div>

@endsection
