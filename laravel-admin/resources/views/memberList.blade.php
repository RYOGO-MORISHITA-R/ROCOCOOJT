@extends('layouts.app')
@section('content')
<div class="page-title">会員一覧</div>
<table class="tablestyle-100">
    <thead>
        <tr>
            <th class="tb2-c">ID</th>
            <th class="tb2-c">名前</th>
            <th class="tb2-c">生年月日</th>
            <th class="tb2-c">メールアドレス</th>
            <th class="tb2-c">ログインID</th>
            <th class="tb2-c">入会日時</th>
            <th class="tb2-c">退会日時</th>
        </tr>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
            <td class="tb3-c">{{ $member->id }}</td>
            <td class="tb3-l">{{ $member->name }}</td>
            <td class="tb3-c">{{ $member->birthday }}</td>
            <td class="tb3-l">{{ $member->email }}</td>
            <td class="tb3-l">{{ $member->login_id }}</td>
            <td class="tb3-c">{{ $member->joined_at }}</td>
            <td class="tb3-c">{{ $member->withdrawn_at ?? '-' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection