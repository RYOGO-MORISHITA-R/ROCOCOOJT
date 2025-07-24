@extends('layouts.app')

@section('content')
<div class="template-detail-header">
    <h2 class="page-title">テンプレート詳細</h2>
</div>

<div class="template-detail-body" style="max-width: 800px; margin: 30px auto;">
    <table class="tablestyle-100">
        <tr>
            <th class="tb2-c" style="width: 200px;">ID</th>
            <td class="tb3-l">{{ $template->tmpId }}</td>
        </tr>
        <tr>
            <th class="tb2-c">コード</th>
            <td class="tb3-l">{{ $template->tmpcode }}</td>
        </tr>
        <tr>
            <th class="tb2-c">テンプレ名</th>
            <td class="tb3-l">{{ $template->tmpname }}</td>
        </tr>
        <tr>
            <th class="tb2-c">作成者</th>
            <td class="tb3-l">{{ $template->username }}</td>
        </tr>
        <tr>
            <th class="tb2-c">CSS</th>
            <td class="tb3-l">{{ $template->cssName }}</td>
        </tr>
        <tr>
            <th class="tb2-c">JS</th>
            <td class="tb3-l">{{ $template->jsName }}</td>
        </tr>
        <tr>
            <th class="tb2-c">更新日時</th>
            <td class="tb3-l">{{ $template->tmpupdatedatetime }}</td>
        </tr>
        <tr>
            <th class="tb2-c">作成日時</th>
            <td class="tb3-l">{{ $template->tmpcreatedatetime }}</td>
        </tr>
        <tr>
            <th class="tb2-c">HTML内容</th>
            <td class="tb3-l">
                <pre style="white-space: pre-wrap; background: #f9f9f9; padding: 10px; border-radius: 6px;">{{ $template->tmphtml }}</pre>
            </td>
        </tr>
    </table>

    <div style="margin-top: 30px;">
        <div class="buttoncenter">
            <a href="{{ route('templateEdit', ['id' => $template->tmpId]) }}" class="button-touroku" style="color:#FFF">編集</a>
            <a href="{{ route('templateList') }}" class="button-touroku" style="color:#FFF">一覧へ戻る</a>
        </div>
    </div>
</div>
@endsection
