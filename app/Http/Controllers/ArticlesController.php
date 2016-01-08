<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Contracts\Cache\Repository;

class ArticlesController extends Controller
{
    public function __construct()
    {
        //$this->cache = $cache;
    }

    public function index(Repository $cache)
    {
        return $cache->rememberForever('debug', function () {
            return mt_rand(1, 10);
        });
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
