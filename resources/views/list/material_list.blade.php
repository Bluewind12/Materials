@extends('app')

@section('title','素材一覧')

@section('content')
    <h2>素材一覧</h2>
    {{--  検索  --}}
    <div class="form-group">
        {{Form::open(['class'=>'row align-items-center'])}}
        {{Form::label('materialId', '素材ID', ['class'=>'col-2 text-right'])}}
        {{Form::text('materialId', null, ['class'=>'form-control mb-2 col-8'])}}
        <div class="col-2"></div>

        {{Form::label('materialName', '素材名', ['class'=>'col-2 text-right'])}}
        {{Form::text('materialName', null, ['class'=>'form-control mb-2 col-8'])}}
        <div class="col-2"></div>

        {{Form::label('materialComment', 'コメント', ['class'=>'col-2 text-right'])}}
        {{Form::text('materialComment', null, ['class'=>'form-control mb-2 col-8'])}}
        <div class="col-2"></div>

        <div class="col-9"></div>
        {{Form::submit('検索', ['class'=>'btn btn-success col-1'])}}
        {{Form::close()}}
    </div>

    {{Form::open()}}
    {{--  色々  --}}
    <div class="mb-2">
        {{Form::submit('削除', ['class'=>'btn btn-danger col-1 mx-2'])}}
        <a class="btn btn-primary col-1 mx-2">追加</a>
    </div>
    {{--  一覧  --}}
    <table class="table align-content-center">
        <thead>
        <tr>
            <th style="width: 10%;">　</th class="col-1">
            <th style="width: 10%;">ID</th>
            <th style="width: 30%;">素材名</th>
            <th style="width: 30%;">コメント</th>
            <th style="width: 10%;">更新日時</th>
            <th style="width: 10%;">編集</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0; $i<10; $i++)
            <tr>
                <td>
                    <div class="text-center">{{Form::checkbox('deleteMaterial',0,false)}}</div>
                </td>
                <td>{{$i}}</td>
                <td>テスト</td>
                <td>コメント</td>
                <td>2021/01/21 00:12:34</td>
                <td><a class="btn btn-primary" href="#">編集</a></td>
            </tr>
        @endfor
        </tbody>
    </table>
    {{Form::close()}}
@endsection
