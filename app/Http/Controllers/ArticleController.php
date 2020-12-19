<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('welcome', [
                    'articles' => Articles::latest()->get()
                ]);
            
    }
    
    public function show($id){
        $article = Articles::find($id);
        return view('articles.show', [
            'article'=> $article
        ]);
    }
    
    public function create(){
        return view('articles.create');
    }
    
    public function store(){
        // die('hello');
        $article = new Articles();
        
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        
        $article->save();
        
        return redirect('/');
    }
    
    //returns a edit view
    public function edit($id){
        
        //find the article
        $article = Articles::find($id);
        
        return view('articles.edit',compact('article'));
    }
    
    
  
}
