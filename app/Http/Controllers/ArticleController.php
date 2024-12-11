<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;


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
        $categories = Category::all();

        return view('submit', ['categories' => $categories]);
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

    public function edit($id) {
        $article = Article::findOrFail($id);
        $categories = Category::all();

        return view('update', compact('article', 'categories'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|max:5120',
        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->desc = $request->desc;
        $article->content = $request->content;
        $article->author = $request->author;
        $article->category_id = $request->category_id;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('articleImage', 'public');
            $article->photo = $photoPath;
        }

        $article->save();

        return redirect('/article/' . $article->id . '/edit')->with('success', 'Article updated successfully!');
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);

        $article->delete();

        return redirect()->route('dashboard')->with('success', 'Article deleted successfully');
    }
}
