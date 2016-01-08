<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        return Article::all();
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
