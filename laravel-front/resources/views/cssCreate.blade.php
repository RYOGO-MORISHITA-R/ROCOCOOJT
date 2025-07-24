@extends('layouts.app')
@section('content')
<div class="page-title">CSS新規作成</div>
@if ($errors->any())
    <div class="aka">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('cssStore') }}">
    @csrf
    <table class="tablestyle-60">
        <tr>
            <th class="tb2-c" width="40%">タイトル</th>
            <td class="tb3-l" width="60%">
                <input type="text" name="cssName" style="width:90%" value="{{ old('cssName') }}">
            </td>
        </tr>
        <tr>
            <th class="tb2-c" width="40%">カテゴリコード</th>
            <td class="tb3-l" width="60%">
                <input type="text" name="cssCode" style="width:90%" value="{{ old('cssCode') }}">
            </td>
        </tr>
        <tr>
            <th class="tb2-c" width="40%">CSSコード</th>
            <td class="tb3-l" width="60%">
                <textarea name="cssContent" style="width:95%;height:150px">{{ old('cssContent') }}</textarea>
            </td>
        </tr>
    </table>
    <div class="buttoncenter">
        <input type="submit" value="登録" class="button-touroku">
    </div>
</form>
@endsection