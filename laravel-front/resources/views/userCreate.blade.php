@extends('layouts.app')

@section('content')
<div id="contents">
    <div class="buttoncenter">
        <div class="page-title">ユーザー登録</div>

        @if ($errors->any())
            <div class="aka">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    </div>

    <form method="POST" action="{{ route('userStore') }}">
        @csrf
        <table class="tablestyle-60">
            <tr>
                <th class="tb2-c" width="40%">名前</th>
                <td class="tb3-l" width="60%">
                    <input type="text" name="name" style="width:90%" value="{{ old('name') }}" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c" width="40%">メールアドレス</th>
                <td class="tb3-l" width="60%">
                    <input type="email" name="email" style="width:90%" value="{{ old('email') }}" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c" width="40%">パスワード</th>
                <td class="tb3-l" width="60%">
                    <input type="password" name="password" style="width:90%" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c" width="40%">パスワード（確認）</th>
                <td class="tb3-l" width="60%">
                    <input type="password" name="password_confirmation" style="width:90%" required>
                </td>
            </tr>
        </table>

        <div class="buttoncenter top-10">
            <input type="submit" value="登録" class="button-touroku">
        </div>
    </form>
</div>
@endsection
