<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'MorishitaCMS') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
<body>
    @include('layouts.header')

    <div id="wrapper">
        @yield('content')
    </div>

    <footer id="footer">
		<div class="clear-box"></div>
		<div class="buttoncenter">
            <div id="copyright">&copy; 株式会社ロココ 森下了伍</div>
        </div>
    </footer>
</body>
</html>
