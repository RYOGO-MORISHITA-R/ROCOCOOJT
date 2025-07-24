<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>MorishitaCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
<body>
<div id="contents">
    <div id="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div id="login-box">
                <div id="content-login">
                    <div class="logo">
                        <img src="{{ asset('images/MorishitaCMS.png') }}" style="max-width:65%;height:auto;" oncontextmenu="return false" />
                    </div>
                </div>
                <ul>
                    <li><input type="text" name="loginid" placeholder="ユーザID" class="form-deco" value="{{ old('loginid') }}"></li>
                    <li><input type="password" name="loginpassword" placeholder="パスワード" class="form-deco"></li>
                    @if ($errors->has('loginerror'))
                        <li><div class="aka">{{ $errors->first('loginerror') }}</div></li>
                    @endif
                </ul>
            </div>
            <div class="buttoncenter">
                <input type="submit" value="ログイン" class="button-login">
            </div>
        </form>
    </div>
</div>
<div class="buttoncenter">
    <div id="copyright">&copy;株式会社ロココ 森下了伍</div>
</div>
</body>
</html>
