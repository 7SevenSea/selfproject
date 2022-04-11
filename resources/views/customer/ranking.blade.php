<div>
  <div>
    <a>デイリーランキング</a>
    <div>
    @foreach($dailies as $daily)
    {{ $daily->menu->name }}
    @endforeach
    </div>
  </div>
</div>
<div>
  <div>
    <a>週間ランキング</a>
  </div>
</div>
<div>
  <div>
    <a>月間ランキング</a>
  </div>
</div>
