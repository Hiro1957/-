<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
    return view('post.create');
}
    //
 public function store(Request $request){
$validated = $request->validate([
'title' => 'required|max:400',
'body' => 'required|max:400',
]);
$validated['user_id'] = auth()->id();
$post = Post::create($validated);
$request->session()->flash('message','保存しました。');
return back();

 }

 public function index(Request $request){
$posts=Post::all();


$keyword = $request->input('keyword');
if(!empty($keyword)) {//$keyword　が空ではない場合、検索処理を実行します
    $posts->where('title', 'LIKE', "%{$keyword}%")
    ->orwhereHas('post', function ($query) use ($keyword) {
        $query->where('body', 'LIKE', "%{$keyword}%");
    })->get();

    $posts=Post::paginate(5);
return view('post.index',compact('posts'));
 }}

 public function show(Post $post){
return view('post.show',compact('post'));
}


 public function edit(Post $post){
return view('post.edit',compact('post'));
 }

 public function update(Request $request, Post $post){
    $validated = $request->validate([
    'title' => 'required|max:20',
    'body' => 'required|max:400',
]);
    $validated['user_id'] = auth()->id();

     $post->update($validated);
     $request->session()->flash('message','更新しました。');
     return back();
}

public function destroy(Request $request,Post $post){
 $post->delete();
 $request->session()->flash('message','削除しました');
return redirect()->route('post.index');
    
}
}











