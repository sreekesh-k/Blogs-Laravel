<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function reading()
    {
        $blogs = Blog::all();
        return view('reading', ['blogs' => $blogs]);
    }

    
}
