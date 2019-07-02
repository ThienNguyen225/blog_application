<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')->paginate(1);
        return view('blog.list', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->input('name');
        $blog->content = $request->input('content');
        $blog->dob = $request->input('date');

        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $blog->image = $path;
        } else {
            echo "chọn lại file ảnh";
        }
        dd($blog);
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->name = $request->input('name');
        $blog->content = $request->input('content');
        $blog->dob = $request->input('date');

        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $blog->image = $path;
        } else {
            echo "chọn lại file ảnh";
        }
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function delete($id){
        $blog = Blog::findOrFail($id);
        return view('blog.delete', compact('blog'));
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
