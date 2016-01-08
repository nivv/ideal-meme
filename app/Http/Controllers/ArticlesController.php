<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Contracts\Cache\Repository;
use Cache;

class ArticlesController extends Controller
{
    public function __construct()
    {
        //$this->cache = $cache;
    }

    public function index()
    {
        $value = Cache::remember('articles', 5, function () {
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

    public function info()
    {
        return phpinfo();
    }
}
