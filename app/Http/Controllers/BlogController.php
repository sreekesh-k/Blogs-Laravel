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
    public function editing(Blog $blog)
    {
        return view('edit', ['blog' => $blog]);
    }
    public function edit(Blog $blog, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => "required"
        ]);
        $blog->update($data);
        return redirect(route('reading'));
    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route('reading'));
    }
}
