<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Cache\CacheManager;

class ArticlesController extends Controller
{
    public function __construct(CacheManager $cache)
    {
        $this->cache = $cache;
    }

    public function index()
    {
        $value = $this->cache->remember('articles', 5, function () {
            return Article::all();
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
}
