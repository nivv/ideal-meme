<?php

namespace App\Http\Controllers;

use Cache;
use App\Article;
use Illuminate\Database\DatabaseManager;
use Illuminate\Contracts\Cache\Repository;

class ArticlesController extends Controller
{
    public function __construct(Article $article)
    {
        $this->article = $article;
    }


    public function index()
    {
        return $this->article->all();
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->article->findOrFail($id);
    }

    public function info()
    {
        return phpinfo();
    }
}
