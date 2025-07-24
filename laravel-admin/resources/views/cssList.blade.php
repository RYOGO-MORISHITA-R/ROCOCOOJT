@extends('layouts.app')
@section('content')
<div class="template-header">
    <div class="template-title-wrapper">
        <div class="template-title">CSS一覧</div>
        <a href="{{ route('cssCreate') }}" class="new-button">
            <img src="{{ asset('images/icon_add.png') }}" alt="新規登録" class="icon">
        </a>
    </div>
</div>

<table class="tablestyle-100">
    <thead>
        <tr>
            <th class="tb2-c">ID</th>
            <th class="tb2-c">タイトル</th>
            <th class="tb2-c">作成者</th>
            <th class="tb2-c">カテゴリコード</th>
        </tr>
    </thead>
    <tbody>
    @foreach($csses as $css)
        <tr>
            <td class="tb3-c">{{ $css->cssId }}</td>
            <td class="tb3-l">{{ $css->cssName }}</td>
            <td class="tb3-l">{{ $css->username }}</td>
            <td class="tb3-l"><pre>{{ $css->cssCode }}</pre></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
