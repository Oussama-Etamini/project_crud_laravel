<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //todo dd('index');
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $article = new Article();
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->date_pub = $request->date_pub;
        $filename = $request->file('picture')->getClientOriginalName();
        $path = $request->file('picture')->storeAs('images', $filename, 'public');
        $article->picture = '/storage/'.$path;
        $article->save();
        return redirect('article');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $article = Article::find($id);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $article =Article::find($id);
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->date_pub = $request->date_pub;
        $filename = $request->file('picture')->getClientOriginalName();
        $path = $request->file('picture')->storeAs('images',$filename,'public');
        $article->picture='/storage/'.$path;
        $article->update();
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $article = Article::find($id);
        $article->delete();
        return redirect('article');
    }

    /**
     * search the specified resource from storage.
     */
    public function search (Request $request)
    {
        //
        $trouve = $request->input('search');
        $articles = Article::where('titre','like','%'.$trouve .'%')->get();
        return view ('articles.index',compact('articles'));
    }
}
