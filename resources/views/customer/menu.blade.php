@extends('layouts.app')

@section('content')
<a  class="modalOpen" data-target="popup" id="open"><button>popup</button></a>


<div>
  <div class="modal-main" id="popup">
    <div class="inner, popup" >
      <!-- おすすめポップアップ -->
      <span>popup</span>
      @foreach($pickupMenus as $pickup)
        @if($pickup->image)
          <img class="menu_image" src="{{ asset('storage/menu_image/' . $pickup->image) }}">
        @else
          <img class="menu_image" src="{{ asset('menu_images/No_image.png') }}">
        @endif
      {{ $pickup->name }}
      {{ $pickup->price }}
      @endforeach
      <div><a href="{{ route('pickup.show', $customer) }}" id="close"><button>おすすめ商品ページへ</button></a></div>
      <div><button id="close">閉じる</button></div>
    </div>
  </div>
  <div>
    <button><a href="{{ route('pickup.show', $customer) }}">おすすめ商品</a></button>
    @foreach($categories as $category)
    <a href="{{ route('customer.show', ['customer' => $customer, 'category' => $category->id]) }}"><button value="{{ $category->id }}">{{ $category->name }}</button></a>
    @endforeach
  </div>
  <div>
    @foreach($menus as $menu)
    <div>
      @if($menu->stock == '0' && !$menu->image)
        <a><img class="menu_image" src="{{ asset('menu_images/No_image.png') }}"></a>
        {{ $menu->name }}
        ￥{{ $menu->price }}
        <span style="color:red">売り切れ</span>
      @elseif($menu->stock == '0')
        <a><img class="menu_image" src="{{ asset('storage/menu_image/' . $menu->image) }}"></a>
        {{ $menu->name }}
        ￥{{ $menu->price }}
        <span style="color:red">売り切れ</span>
      @elseif(!$menu->image)
        <a class="modalOpen" data-target="{{ $customer }}"><img class="menu_image" src="{{ asset('menu_images/No_image.png') }}"></a>
        {{ $menu->name }}
        ￥{{ $menu->price }}
      @else
        <a class="modalOpen" data-target="{{ $customer }}"><img class="menu_image" src="{{ asset('storage/menu_image/' . $menu->image) }}"></a>
        {{ $menu->name }}
        ￥{{ $menu->price }}
      @endif
    </div>
    @endforeach
  </div>
  <div>
    <button><a href="{{ route('customer.order.list', $customer) }}">注文履歴</a></button>
  </div>
</div>
<a href="{{ route('customer.create') }}" id="close"><button>戻る</button></a>
<div class="modal-main" id="{{ $customer }}">
  <div class="inner">
    @if($menu->image)
      <img class="menu_image" src="{{ asset('storage/menu_image/' . $menu->image) }}">
    @else
      <img class="menu_image" src="{{ asset('menu_images/No_image.png') }}">
    @endif
      {{ $menu->name }}
      ￥{{ $menu->price }}
    <form action="{{ route('customer.order.addCart') }}" method="get">
      @csrf
      <input type="hidden" name="customerId" value="{{ $customer }}">
      <input type="hidden" name="table" value="{{ $tableId->table }}">
      <input type="hidden" name="menuId" value="{{ $menu->id }}">
      <label for="number">数量</label><input type="number" name="number" id="number" min="1" max="10">
      <input type="submit" value="注文する" onclick="return confirm('注文を確定してよろしいですか？')">
    </form>
    <a href="" class="modalClose">戻る</a>
  </div>
</div>
@endsection
