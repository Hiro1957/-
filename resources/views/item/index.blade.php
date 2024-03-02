<h1>一覧画面</h1>
@foreach ($items as $item)
    <img src="{{ Storage::url($item->img_path) }}" width="25%">
@endforeach