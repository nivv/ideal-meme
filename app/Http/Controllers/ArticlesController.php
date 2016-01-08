<?php

namespace App\Http\Controllers;

use Cache;
use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Cache\Repository;

class ArticlesController extends Controller
{
    public function __construct(Article $article)
    {
        $this->article = $article;
    }


    public function index()
    {
        $value = Cache::remember('articles', 5, function () {
            return DB::table('articles')->get();
        });
        return $value;
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Article::findOrFail($id);
    }

    public function info()
    {
        return phpinfo();
    }
}
