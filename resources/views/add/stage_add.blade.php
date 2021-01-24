@extends('app')

@section('title','ステージ追加')

@section('content')
    <h2>ステージ追加</h2>
    {{--  検索  --}}
    <div class="form-group w-75 m-auto">
        <h4 class="col-12">基本情報</h4>
        {{Form::open(['class'=>'row align-items-center'])}}
        <div class="col-3 text-right">
            <span class="badge badge-danger">必須</span>
            {{Form::label('stageName', 'ステージ名')}}
        </div>
        {{Form::text('stageName', null, ['class'=>'form-control mb-2 col-6', 'required'])}}
        <div class="col-3"></div>
        {{Form::label('stageComment', 'コメント', ['class'=>'col-3 text-right'])}}
        {{Form::text('stageComment', null, ['class'=>'form-control mb-2 col-6'])}}
        <div class="col-3"></div>


        <div class="col-3 text-right">
            <span class="badge badge-danger">必須</span>
            {{Form::label('stageStamina', '消費スタミナ')}}
        </div>
        {{Form::number('stageStamina', null, ['class'=>'form-control mb-2 col-6'])}}
        <div class="col-3"></div>


        <div class="col-10"></div>
        {{Form::submit('確定',['class'=>'col-1 btn btn-primary'])}}

        {{Form::close()}}
    </div>
@endsection
