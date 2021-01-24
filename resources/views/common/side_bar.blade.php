<div class="side-bar d-flex flex-column align-items-center
    px-2 py-4 border-top border-bottom border-white"
     style="width: 200px;">
    <div class="h4 w-100 px-2 border-white border-bottom text-center">@fa('map')　ステージ</div>
    <a href="{{route('stages.view')}}" class="text-reset">・一覧</a>
    <a href="{{route('stages.store')}}" class="text-reset">・登録</a>

    <div class="h4 w-100 px-2 mt-4 border-white border-bottom text-center">@fa('gem')　　素材　</div>
    <a href="{{route('materials.view')}}" class="text-reset">・一覧</a>
    <a href="{{route('materials.store')}}" class="text-reset">・登録</a>

    <div class="h4 w-100 px-2 mt-4 border-white border-bottom text-center">@fa('calculator')　　計算　</div>
    <a href="#" class="text-reset">・周回計算</a>
</div>
