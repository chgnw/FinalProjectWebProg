<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function showAllArticles() {
        $articles = Article::paginate(3);

        return view('dashboard', ['articles' => $articles]);
    }

    public function search (Request $request) {
        $data = $request->input('data');
        $result = Article::where('title', 'LIKE', '%'. $data . '%')
                    -> orWhere('content', 'LIKE', '%' . $data . '%')
                    ->get();

        return view('search', ['articles' => $result, 'data' => $data]);
    }
    public function submitarticle(){
        return view('submitarticle');
    }
    public function storearticle(Request $request){
        $request->validate([
            'title'=>'required',
            'short_desc'=>'required',
            'picture'=>'required',
            'content'=>'required',
            'author_id'=>'required',
            'category_id'=>'required'
        ]   
        );

        $article= Article::create([
            'title'=>$request->title,
            'short_desc'=>$request->short_desc,
            'picture'=>$request->picture,
            'content'=>$request->content,
            'author_id'=>$request->author_id,
            'category_id'=>$request->category_id,
            ]
            
        );
        $article->save();
        return redirect()->route('dashboard')->with('success','Article Berhasil Di Submit');
    }
}
