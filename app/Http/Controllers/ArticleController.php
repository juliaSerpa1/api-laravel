<?php
namespace  App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    public function show($slug)
    {
        // Busca o artigo pelo slug
        $article = Article::where('slug', $slug)->first();

        if (!$article) {
            return response()->json(['message' => 'Artigo não encontrado'], 404);
        }

        return response()->json($article);
    }
}