<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('会員管理システム') }}
        </h2>
    </x-slot>
<form method="post" action="{{route('post.update',$post)}}">
    @csrf
    @method('patch')
 <div class="mt-8">
 
 @if(session('message'))
    <div class="text-red-600" font-bold">
    {{session('message')}}
</div>
@endif

    <div class="w-full" flex flex-col">
    <label for="title" class="font-semibold mt-4">名前</label>
    <x-input-error :message="$errors->get('title')"class="mt-2/">
    <input type = "text" name="title" class="w-auto py-2
    border border-gray-300 round-md" id="title"
    value="{{old('title',$post->title)}}">
</div>   


    <div class="w-full" flex flex-col">
    <label for="body" class="font-semibold mt-4">住所</label>
    <x-input-error :message="$errors->get('body')"class="mt-2/">
    <input type = "text" name="body" class="w-auto py-2 
    border border-gray-300 round-md" id="body"
    value="{{old('body',$post->body)}}">
</div>   


<x-primary-button class="mt-4">
    送信する
   </x-primary-button>
</form>
</x-app-layout>
