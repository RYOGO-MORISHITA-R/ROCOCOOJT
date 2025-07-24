<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>FansLog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if (!empty($cssContent))
    <style>{!! $cssContent !!}</style>
    @endif
</head>
<body>

<div class="login-wrapper">
    <div id="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div id="login-box">
                {!! $tmphtml !!}
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

@if (!empty($jsContent))
<script>{!! $jsContent !!}</script>
@endif

</body>
</html>
