<header>
  <div class="header-left">
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <input type="submit" class="logout" value="ログアウト">
    </form>
  </div>
  <span id="current-time"></span>
</header>