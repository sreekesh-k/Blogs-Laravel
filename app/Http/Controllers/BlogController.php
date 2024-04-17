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
    public function createBlog(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => "required"
        ]);
        $data['username'] = auth()->user()->name;

        $newblog = Blog::create($data);
        return redirect(route('reading'));
    }
}
