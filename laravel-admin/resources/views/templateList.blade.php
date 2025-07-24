@extends('layouts.app')

@section('content')
<div class="template-header">
    <div class="template-title-wrapper">
        <div class="template-title">テンプレート一覧</div>
        <a href="{{ route('templateCreate') }}" class="new-button">
            <img src="{{ asset('images/icon_add.png') }}" alt="新規登録" class="icon">
        </a>
    </div>
</div>
@if (session('success'))
    <div id="confomsg">{{ session('success') }}</div>
@endif
<table class="tablestyle-100">
    <thead>
        <tr>
            <th class="tb2-c">ID</th>
            <th class="tb2-c">コード</th>
            <th class="tb2-c">テンプレ名</th>
            <th class="tb2-c">作成者</th>
            <th class="tb2-c">CSS</th>
            <th class="tb2-c">JS</th>
            <th class="tb2-c">更新日</th>
        </tr>
    </thead>
    <tbody>
    @foreach($templates as $template)
        <tr>
            <td class="tb3-c">
                <a href="{{ route('templateShow', ['id' => $template->tmpId]) }}">
                    {{ $template->tmpId }}
                </a>
            </td>
            <td class="tb3-l">{{ $template->tmpcode }}</td>
            <td class="tb3-l">{{ $template->tmpname }}</td>
            <td class="tb3-c">{{ $template->username }}</td>
            <td class="tb3-l">{{ $template->cssName }}</td>
            <td class="tb3-l">{{ $template->jsName }}</td>
            <td class="tb3-c">{{ $template->tmpupdatedatetime }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
