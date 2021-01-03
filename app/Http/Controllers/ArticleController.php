<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Articles::latest()->paginate(8);
        return view('welcome', compact('articles'));
    }


    public function show($id)
    {
        $article = Articles::find($id);

        // get previous user id
        $previous = Articles::where('id', '<', $article->id)->max('id');

        // get next user id
        $next = Articles::where('id', '>', $article->id)->min('id');

        return view('articles.show', [
            'article' => $article
        ])->with('previous', $previous)->with('next', $next);;
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // die('hello');

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = new Articles();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/');
    }

    //returns a edit view
    public function edit($id)
    {

        //find the article
        $article = Articles::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        // die('hello');



        $article = Articles::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy($id)
    {
        $article = Articles::destroy($id);
        return (redirect('/home'));
    }
}
