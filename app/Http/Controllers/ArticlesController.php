<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Facade\Ignition\DumpRecorder\DumpHandler;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of a resource
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {   
        // Show a single resource

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // Show a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing resource
        // Find the article associated with the id

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // Persist the edited resource

        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

    public function destroy()
    {
        // Delete the resource
    }
}
