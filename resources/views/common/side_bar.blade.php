<div class="side-bar d-flex flex-column align-items-center
    px-2 py-4 border-top border-bottom border-white"
     style="width: 150px;">
    <div class="h4 px-2 border-white border-bottom">@fa('list')　一覧</div>
    <a href="{{route('list.stages')}}" class="text-reset">ステージ</a>
    <a href="{{route('list.materials')}}" class="text-reset">素材</a>

    <div class="h4 px-2 mt-4 border-white border-bottom">@fa('pen')　登録</div>
    <a href="#" class="text-reset">ステージ登録</a>
    <a href="{{route('add.materials')}}" class="text-reset">素材登録</a>

    <div class="h4 px-2 mt-4 border-white border-bottom">@fa('calculator')　計算</div>
    <a href="#" class="text-reset">周回計算</a>
</div>
