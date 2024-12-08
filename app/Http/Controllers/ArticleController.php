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
}
