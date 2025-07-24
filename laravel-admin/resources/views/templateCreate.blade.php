@extends('layouts.app')

@section('content')
<div id="contents">
    <div class="buttoncenter">
        <div class="page-title">テンプレート新規作成</div>
        @if ($errors->any())
            <div class="aka">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form enctype="multipart/form-data" action="{{ route('templateStore') }}" method="POST">
        @csrf
        <table class="tablestyle-60">
            <tr>
                <th class="tb2-c" width="40%">テンプレートコード</th>
                <td class="tb3-l" width="60%">
                    <input name="tmpcode" type="text" style="width:90%" value="{{ old('tmpcode') }}" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">テンプレート名</th>
                <td class="tb3-l">
                    <input name="tmpname" type="text" style="width:90%" value="{{ old('tmpname') }}" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">HTMLコード</th>
                <td class="tb3-l">
                    <textarea name="tmphtml" style="width:95%;height:150px" required>{{ old('tmphtml') }}</textarea>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">CSS</th>
                <td class="tb3-l">
                    <select name="cssId" style="width:95%">
                        <option value="">選択してください</option>
                        @foreach ($csses as $css)
                            <option value="{{ $css->cssId }}" {{ old('cssId') == $css->cssId ? 'selected' : '' }}>{{ $css->cssName }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">JavaScript</th>
                <td class="tb3-l">
                    <select name="jsId" style="width:95%">
                        <option value="">選択してください</option>
                        @foreach ($javascripts as $js)
                            <option value="{{ $js->jsId }}" {{ old('jsId') == $js->jsId ? 'selected' : '' }}>{{ $js->jsName }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <div class="buttoncenter">
            <button type="submit" class="button-touroku">作成する</button>
        </div>
    </form>
</div>
@endsection