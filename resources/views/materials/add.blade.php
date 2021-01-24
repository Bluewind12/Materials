@extends('app')

@section('title','素材追加')

@section('content')
    <h2>素材追加</h2>
    {{--  検索  --}}
    <div class="form-group w-75 m-auto">
        <h4 class="col-12">基本情報</h4>
        {{Form::open(['class'=>'row align-items-center'])}}
        <div class="col-3 text-right">
            <span class="badge badge-danger">必須</span>
            {{Form::label('materialName', '素材名')}}
        </div>
        {{Form::text('materialName', null, ['class'=>'form-control mb-2 col-6', 'required'])}}
        <div class="col-3"></div>
        {{Form::label('materialComment', 'コメント', ['class'=>'col-3 text-right'])}}
        {{Form::text('materialComment', null, ['class'=>'form-control mb-2 col-6'])}}
        <div class="col-3"></div>


        <div class="col-3 text-right">
            <span class="badge badge-danger">必須</span>
            {{Form::label('materialStage', 'ドロップステージ')}}
        </div>
        {{Form::select('materialStage', ['STAGE1-1','STAGE1-2'], null, ['class'=>'form-control mb-2 col-6', 'multiple', 'required'])}}
        <div class="col-3"></div>

        <h4 class="col-12">合成レシピ</h4>
        {{Form::label('syntheticMaterial1', '素材名 - 1', ['class'=>'col-3 text-right'])}}
        {{Form::select('syntheticMaterial1', ['TEST1','test2'], null, ['class'=>'form-control mb-2 col-6', 'placeholder'=>'選択してください'])}}
        <div class="col-3"></div>
        {{Form::label('syntheticCount1', '必要数 - 1', ['class'=>'col-3 text-right'])}}
        {{Form::number('syntheticCount1', null, ['class'=>'form-control mb-2 col-6'])}}
        <div class="col-3"></div>

        {{Form::label('syntheticMaterial2', '素材名 - 2', ['class'=>'col-3 text-right'])}}
        {{Form::select('syntheticMaterial2', ['TEST1','test2'], null, ['class'=>'form-control mb-2 col-6', 'placeholder'=>'選択してください'])}}
        <div class="col-3"></div>
        {{Form::label('syntheticCount2', '必要数 - 2', ['class'=>'col-3 text-right'])}}
        {{Form::number('syntheticCount2', null, ['class'=>'form-control mb-2 col-6'])}}
        <div class="col-3"></div>

        {{Form::label('syntheticMaterial3', '素材名 - 3', ['class'=>'col-3 text-right'])}}
        {{Form::select('syntheticMaterial3', ['TEST1','test2'], null, ['class'=>'form-control mb-2 col-6', 'placeholder'=>'選択してください'])}}
        <div class="col-3"></div>
        {{Form::label('syntheticCount3', '必要数 - 3', ['class'=>'col-3 text-right'])}}
        {{Form::number('syntheticCount3', null, ['class'=>'form-control mb-2 col-6'])}}
        <div class="col-3"></div>

        <div class="col-10"></div>
        {{Form::submit('確定',['class'=>'col-1 btn btn-primary'])}}

        {{Form::close()}}
    </div>
@endsection
