<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Mail\ArticleMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    //CRUD metodi per CREATE
    public function create()
    {
        return view('articles.create');
    }
    public function store(ArticleRequest $request)
    {
        $article = new Article();
        $article->name = $request->name;
        $article->img = $request->img;
        $article->save();

        Mail::to('info@crudalessio.it')->send(new ArticleMail($article));
        return redirect()->back()->with('message','Articolo aggiunto con successo!');
    }

    //CRUD metodi per READ
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    //CRUD metodi per UPDATE
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
    public function update(Article $article, Request $request)
    {
        $article->name = $request->name;
        $article->img = $request->img;
        $article->save();

        return redirect()->back()->with('message','Artcolo modificato con successo');
    }

    //CRUD metodi per DELETE
    public function delete(Article $article)
    {
        $article->delete();

        return redirect(route('articles.index', compact('article')));
    }
}
