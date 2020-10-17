<h1>Why Issue</h1>
  <nav class="nav">
    <input type="checkbox" id="nav-check" class="nav-unshown">
    <label for="nav-check" id="nav-open"><span></span></label>
    <label class="nav-unshown" id="nav-close" for="nav-check"></label>
    <div class="nav__content">
      <ul class="header__links">
        <li class="header__link"><a href="{{ route('lists') }}">▶︎ 目標一覧</a></li>
        <li class="header__link"><a href="{{ route('create') }}">▶︎ 課題発見フォーム</a></li>
      </ul>
    </div>
  </nav>