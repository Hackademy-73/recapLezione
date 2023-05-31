<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //mass asignement
        $article = Article::create([
            'title'=> $request->title,
            'subtitle'=>$request->subtitle,
            'text'=>$request->text
        ]);

        return redirect(route('homePage'))->with('message','Complimenti hai memorizzato corretamente l\' articolo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // dd($request->all(), $article);
        $article->update([
            'title'=> $request->title,
            'subtitle'=>$request->subtitle,
            'text'=>$request->text
        ]);

        return redirect(route('homePage'))->with('message','Complimenti hai modifcato corretamente l\' articolo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('homePage'))->with('message','Complimenti hai cancellato corretamente l\' articolo');
    }
}
