<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('会員管理システム') }}
        </h2>
    </x-slot>
<br> 
<!-- 検索機能ここから -->
<div>
  <form action="{{ route('post.index') }}" method="GET">

  @csrf

    <input type="text" name="keyword">
    <input type="submit" value="検索">
  </form>
</div>
</br>

    <dev class="mx-auto px-6">
@if(session('message'))
<div class="text-red-600 font-bold">
 {{session('message')}}
</div>
@endif

@foreach($posts as $post)
  <dev class="mt-4 p-8 bg-white w-full rounded-2xl">
    <h1 class="p-4 text-lg font-semibold">
        詳細：
        <a href="{{route('post.show',$post)}}"
        class-"text-blue-600">
 <p>{{$post->title}}</p>
       </a>
    </h1>
<hr class='w-full'>
<p class="mt-4 p-4">
<p>{{$post->body}}</p>

<div class="p-4 text-sm font-semibold">
<p>{{$post->created_at}}</p>
</div>
    @endforeach
<div class="mb-4">
    {{ $posts->links() }}
</div>

</div>
</x-app-layout>
