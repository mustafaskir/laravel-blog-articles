<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Auth;
use DB;
use App\User;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Articles::paginate(4)->orderBy('id','DESC')->get();
        $articles = Articles::orderBy('id','DESC')->paginate(4);

        return view('welcome',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Articles::create($request->all());
        Articles::create([
            'user_id' => Auth::User()->id,
            'title' => $request->title,
            'content' => $request->content,
            'live' => $request->live,
        ]);

        return redirect('/articles');

    }
    public function show($id)
    {
        $article = Articles::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        return view('articles.edit',compact('article'));
    }
    public function update(Request $request, $id)
    {
        $article = Articles::findOrFail($id);
        if( ! isset($request->live))
            $article->update(array_merge($request->all(),['live'=>false]));
        else
            $article->update($request->all());

        return redirect('/articles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::findOrFail($id);
        $article->delete();

        return redirect('/articles');
    }
}
