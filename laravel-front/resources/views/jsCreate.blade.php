@extends('layouts.app')

@section('content')
<div id="contents">
    <div class="buttoncenter">
        <div class="page-title">JavaScript登録</div>

        @if ($errors->any())
            <div class="aka">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    </div>

    <form action="{{ route('jsStore') }}" method="POST">
        @csrf
        <table class="tablestyle-60">
            <tr>
                <th class="tb2-c" width="40%">JavaScript名</th>
                <td class="tb3-l" width="60%">
                    <input name="jsName" type="text" style="width:90%" value="{{ old('jsName') }}">
                </td>
            </tr>
            <tr>
                <th class="tb2-c" width="40%">カテゴリコード</th>
                <td class="tb3-l" width="60%">
                    <input type="text" name="jsCode" style="width:90%" value="{{ old('jsCode') }}">
                </td>
            </tr>
            <tr>
                <th class="tb2-c" width="40%">Jsコード</th>
                <td class="tb3-l" width="60%">
                    <textarea name="jsContent" style="width:95%; height:150px">{{ old('jsContent') }}</textarea>
                </td>
            </tr>
        </table>

        <div class="buttoncenter top-10">
            <input type="submit" value="登録" class="button-touroku">
        </div>
    </form>
</div>
@endsection
