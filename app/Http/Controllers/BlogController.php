<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = blog::all();
        $blogs = DB::table('blogs')->join('category', 'blogs.category_id', 'category.id')->join('users', 'blogs.user_id', 'users.id')->select('blogs.*', 'category.title AS category', 'users.name AS User')->get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('category')->get();
        $users = DB::table('users')->get();
        return view('blogs.add', ['categories' => $categories, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'user' => 'required'
        ]);

        $blog = new blog();
        $blog->title = $request->blog;
        $blog->description = $request->description;
        $blog->image = $request->image;
        $blog->category_id = $request->category;
        $blog->user_id = $request->user;
        $blog->save();
        Session::flash('success', 'Blog Added Success');
        return redirect('blog/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = DB::table('category')->get();
        $users = DB::table('users')->get();
        $blog = DB::table('blogs')->select()->where('id', $id)->first();
        return view('blogs.details', ['categories' => $categories, 'users' => $users, 'blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = DB::table('category')->get();
        $users = DB::table('users')->get();
        $blog = DB::table('blogs')->select()->where('id', $id)->first();
        return view('blogs.edit', ['categories' => $categories, 'users' => $users, 'blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        $request->validate([
            'blog' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'user' => 'required'
        ]);

        DB::table('blogs')->where('id', $request->id)->update([
            "title" => $request->blog,
            "description" => $request->description,
            "image" => $request->image,
            "category_id" => $request->category,
            "user_id" => $request->user
        ]);

        Session::flash('success', 'Blog Updated Success');
        return redirect('blog/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('blogs')->delete($id);
        Session::flash('success', 'Blog Deleted Success');
        return redirect('blog/index');
    }
}