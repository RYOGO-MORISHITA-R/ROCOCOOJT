@extends('layouts.app')

@section('content')
<div id="contents">
    <div class="buttoncenter">
        <div class="page-title">テンプレート編集</div>
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

    <form enctype="multipart/form-data" action="{{ route('templateUpdate', ['id' => $template->tmpId]) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="tablestyle-60">
            <tr>
                <th class="tb2-c" width="40%">テンプレートコード</th>
                <td class="tb3-l" width="60%">
                    <input name="tmpcode" type="text" style="width:90%" value="{{ old('tmpcode', $template->tmpcode) }}" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">テンプレート名</th>
                <td class="tb3-l">
                    <input name="tmpname" type="text" style="width:90%" value="{{ old('tmpname', $template->tmpname) }}" required>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">HTMLコード</th>
                <td class="tb3-l">
                    <textarea name="tmphtml" style="width:95%;height:150px" required>{{ old('tmphtml', $template->tmphtml) }}</textarea>
                </td>
            </tr>
            <tr>
                <th class="tb2-c">CSS</th>
                <td class="tb3-l">
                    <select name="cssId" style="width:95%">
                        <option value="">選択してください</option>
                        @foreach ($csses as $css)
                            <option value="{{ $css->cssId }}" {{ old('cssId', $template->cssId) == $css->cssId ? 'selected' : '' }}>
                                {{ $css->cssName }}
                            </option>
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
                            <option value="{{ $js->jsId }}" {{ old('jsId', $template->jsId) == $js->jsId ? 'selected' : '' }}>
                                {{ $js->jsName }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </table>

        <div class="buttoncenter">
            <button type="submit" class="button-touroku">更新する</button>
        </div>
    </form>
</div>
@endsection
