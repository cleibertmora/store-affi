<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('desc')->get();

        return view('index')
        ->with('categories', $categories);
    }
}
