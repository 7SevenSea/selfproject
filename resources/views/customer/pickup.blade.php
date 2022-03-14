@extends('layouts.app')

@section('content')

<div>
  <div>
    <h1>本日のおすすめ</h1>
  </div>
  <div>
    @foreach($pickupMenus as $pickupMenu)
    <div>
      @if($pickupMenu->stock === '0' && !$pickupMenu->image)
        <a><img class="menu_image" src="{{ asset('menu_images/No_image.png') }}"></a>
        {{ $pickupMenu->name }}
        ￥{{ $pickupMenu->price }}
        <span style="color:red">売り切れ</span>
      @elseif($pickupMenu->stock === '0')
        <a><img class="menu_image" src="{{ asset('storage/menu_image/' . $pickupMenu->image) }}"></a>
        {{ $pickupMenu->name }}
        ￥{{ $pickupMenu->price }}
        <span style="color:red">売り切れ</span>
      @elseif(!$pickupMenu->image)
        <a class="modalOpen" data-target="{{ $customer }}"><img class="menu_image" src="{{ asset('menu_images/No_image.png') }}"></a>
        {{ $pickupMenu->name }}
        ￥{{ $pickupMenu->price }}
      @else
        <a class="modalOpen" data-target="{{ $customer }}"><img class="menu_image" src="{{ asset('storage/menu_image/' . $pickupMenu->image) }}"></a>
        {{ $pickupMenu->name }}
        ￥{{ $pickupMenu->price }}
      @endif
    </div>
    @endforeach
  </div>
  <div>
    <button><a href="{{ route('customer.order.list', $customer) }}">注文履歴</a></button>
    <button type="button" onClick="history.back()">戻る</button>
  </div>
</div>
<div class="modal-main" id="{{ $customer }}">
  <div class="inner">
    @if($pickupMenu->image)
      <img class="menu_image" src="{{ asset('storage/menu_image/' . $pickupMenu->image) }}">
    @else
      <img class="menu_image" src="{{ asset('menu_images/No_image.png') }}">
    @endif
      {{ $pickupMenu->name }}
      ￥{{ $pickupMenu->price }}
    <form action="{{ route('customer.order.addCart') }}" method="get">
      @csrf
      <input type="hidden" name="customerId" value="{{ $customer }}">
      <input type="hidden" name="table" value="{{ $tableId->table }}">
      <input type="hidden" name="menuId" value="{{ $pickupMenu->id }}">
      <label for="number">数量</label><input type="number" name="number" id="number" min="1" max="10">
      <input type="submit" value="注文する" onclick="return confirm('注文を確定してよろしいですか？')">
    </form>
    <a href="" class="modalClose">戻る</a>
  </div>
</div>
@endsection
