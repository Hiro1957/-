<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('会員管理システム') }}
        </h2>
    </x-slot>

<div class="bg-white w-full rounded-2xl">
<div class="mt-4 p-4">
    <h1 class="text-lg" font-semibold">
 {{$post->title}}
</h1>

<div class="text-right flex">
<a href="{{route('post.edit',$post)}}" >

<x-primary-button>
編集
</x-primary-button>
</a>


<form method="post" action="{{route('post.destroy',$post)}}"
class="flex-2">
@csrf
@method('delete') 
<x-primary-button class="bg-red-700 ml-2">
削除
</x-primary-button>
</form>
</div>

<hr class='w-full'>
<p class="mt-4 p-4">
<p>{{$post->body}}</p>
    
<div class="text-sm front-semibold flex flex-row-reverse">
<p>{{$post->created_at}}</p>

</div>
</div>
</div>
</x-app-layout>
