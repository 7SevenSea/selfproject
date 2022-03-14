@extends('layouts.app')

@section('content')

<div>
  <form action="{{ route('customer.store') }}" method="post">
    @csrf
      <label for="number">人数</label><input type="text" name="number" id="number">
      <label for="table">席名</label><input type="text" name="table" id="table">
      <input type="submit" value="注文開始">
  </form>
</div>
<a href="/"><button>戻る</button></a>
@endsection
