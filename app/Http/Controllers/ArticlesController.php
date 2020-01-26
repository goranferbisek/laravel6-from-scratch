<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource
    }

    public function edit()
    {
        // Show a view to edit an existing article
    }

    public function update()
    {
        // Persist the changes
    }

    public function destroy()
    {
        // Delete a resource
    }


}
