<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function blogPage()
    {
        $articles = Article::all();

        return view('blog', [
            "articles" => $articles
        ]);
    }
}
