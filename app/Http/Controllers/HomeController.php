<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Articles::paginate(5);
        return view('home')->with('articles', $article);
    }
}
