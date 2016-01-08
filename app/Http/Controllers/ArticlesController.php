<?php

namespace App\Http\Controllers;

use App\Article;
use Cache;

class ArticlesController extends Controller
{
    public function __construct()
    {
        //$this->cache = $cache;
    }

    public function index()
    {
        Cache::store('redis')->put('bar', 'baz', 10);
        return 'röven';
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
