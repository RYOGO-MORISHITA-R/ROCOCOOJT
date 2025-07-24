<!-- resources/views/layouts/header.blade.php -->
<header id="header">
    <div id="headerbunbetu">
        <a href="{{ route('home') }}">
            <div class="logohaba">
                <img src="{{ asset('images/MorishitaCMS.png') }}" alt="logo" width="174" height="42">
            </div>
        </a>
    </div>
    <div id="headerbunbetu1">
        <ul class="yokonarabi">
            <!-- メニュー部分（例） -->
            <li class="boxhaba">
                <!-- ハンバーガーメニュー省略 -->
            </li>
            <li class="staffhaba">
                <strong>
                    {{ Auth::user()->name }}さんログイン中
                </strong>
            </li>
            <form action="" method="POST" class="contact-form">
                @csrf
                <li class="yokohaba">
                    <input name="tejyunsyo" type="text" placeholder="テンプレートID">
                </li>
                <li class="yokohaba1">
                    <input type="submit" value="検索" class="button-kensaku">
                </li>
            </form>
            <li class="logouthaba">
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="logoutbutton">Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="clear-box"></div>
</header>
<nav class="main-menu">
    <ul class="menu-list">
        <li><a href="{{ route('templateList') }}">テンプレート一覧</a></li>
        <li><a href="{{ route('cssList') }}">css一覧</a></li>
        <li><a href="{{ route('jsList') }}">js一覧</a></li>
        <li><a href="{{ route('userList') }}">ユーザー一覧</a></li>
        <li><a href="{{ route('memberList') }}">会員一覧</a></li>
    </ul>
</nav>
