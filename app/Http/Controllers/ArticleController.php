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

    public function submitArticle() {
        return view('submit');
    }

    public function storeArticle(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:100',
            'content' => 'required|string',
            'author' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'required|image|max:5120',
        ]);

        $photoPath = $request->file('photo') ? $request->file('photo')->store('articleImage', 'public') : 'articleImage/imgnotfound.png';

        Article::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'content' => $request->content,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'photo' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Article created successfully!');
    }

    public function articles() {
        $articles = Article::paginate(4);

        return view('articles', ['articles' => $articles]);
    }

    public function articleDetail($id) {
        $article = Article::findOrfail($id);

        return view('articleDetail', ['article' => $article]);
    }

    public function storeUpdatedArticle(Request $request, Article $article){
        $request->validate([
            'title'=>'required',
            'short_desc'=>'required',
            'picture'=>'nullable|image|mimes:jpeg,jpg,png,bmp,gif,svg',
            'content'=>'required',
            'author_id'=>'required',
            'category_id'=>'required'
        ]
        );
        $article->title=$request->title;
        $article->short_desc=$request->short_desc;
        $article->content=$request->content;
        $article->author_id=$request->author_id;
        $article->category_id=$request->category_id;


        if($request->picture!=null){
            Storage::disk('public')->delete($article->picture);
            $article->picture= $request->picture->store('images','public');
        }

        $article->save();
        return redirect()->route('home')->with('success','Article Berhasil Di Update');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);

        return view('update', compact('article'));
    }

    public function update(Request $request, $id) {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|max:5120', // Photo optional buat update
        ]);

        $article = Article::findOrFail($id);

        // Update the article with the new data
        $article->title = $request->title;
        $article->desc = $request->desc;
        $article->content = $request->content;
        $article->author = $request->author;
        $article->category_id = $request->category_id;

        // If a new photo is uploaded, update it
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('articleImage', 'public');
            $article->photo = $photoPath;
        }

        $article->save();

        return redirect()->route('/article/{{ $article->id }}/edit')->with('success', 'Article updated successfully!');
    }

}
