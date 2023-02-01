<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('is_published', true)->orderBy('updated_at', 'desc')->take(10)->get();

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post = new Post();

        // $post->title = $request->title;
        // $post->excerpt = $request->excerpt;
        // $post->body = $request->body;
        // $post->image_path = '$request->image_path';
        // $post->is_published = $request->is_published === 'on';
        // $post->min_to_read = $request->min_to_read;

        // $post->save();

        Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image_path' => '$request->image_path',
            'is_published' => $request->is_published === 'on',
            'min_to_read' => $request->min_to_read,
        ]);

        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('is_published', true)->findOrFail($id);

        return view('blog.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
