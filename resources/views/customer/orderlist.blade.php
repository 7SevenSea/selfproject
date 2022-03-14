@extends('layouts.app')

@section('content')
<div>
  <div>
    <h1>注文履歴画面</h1>
      <table class>
        <tr>
          <th>品名</th>
          <th>金額</th>
        </tr>
          @foreach ($customer->orders as $order)
        <tr>
          <td>{{ $order->menu->name }}</td>
          <td>{{ $order->menu->price }}円</td>
          <td class="modalOpen" data-target="reorder" ><button>再注文</button></td>
        </tr>
          @endforeach
      </table>
      <div>
        <form action="{{ route('customer.payment', $customer) }}" method="post">
          @csrf
          @method('PUT')
          <div>
            <label for="total">合計金額</label>
            <input type="text" name="total" id="total" value="{{ $customer->total_price }}円">
          </div>
          <div>
            <label for="number">人数</label>
            <input type="text" name="number" id="number" value="{{ $customer->number }}人">
          </div>
          <div>
            <label for="money">1人あたりの金額</label>
            <input type="text" name="money" id="money" value="{{ $customer->total_price/$customer->number }}円">
          </div>
          <div>
            <input type="submit" id="payment" value="会計する">
          </div>
          <div>
            <button type="button" onClick="history.back()">戻る</button>
          </div>
        </form>
      </div>
  </div>
</div>
<div class="modal-main" id="reorder" >
  <div class="inner">
    <form action="{{ route('customer.reorder') }}" method="get">
      @csrf
      <p>いくつ注文しますか？</p>
      <input type="hidden" name="customer_id" value="{{ $customer->id }}">
      <input type="hidden" name="table" value="{{ $customer->table }}">
      <input type="hidden" name="menu_id" value="{{ $order->menu->id }}">
      <label for="number">数量</label><input type="number" name="number" id="number" min="1" max="10">
      <input type="submit" value="注文する" onclick="return confirm('注文を確定してよろしいですか？')">
    </form>
    <a href="" class="modalClose">戻る</a>
  </div>
</div>

@endsection
