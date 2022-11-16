<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Post;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Repositories\PostRepositoryEloquent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $repository;

    public function __construct(PostRepositoryEloquent $postRepository){
        $this->repository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = $this->repository
                      ->with(['category', 'user'])->latest()
                    //   ->orderBy('created_at', 'desc')
                      ->paginate(5);
                      
        $authors = Post::join('users', 'users.id', 'posts.user_id')->select('users.id','name', 'profile_photo_path', Post::raw('count("posts.user_id") AS post'))->groupBy('posts.user_id')->orderBy('name')->get();
        $categories = Post::join('categories', 'categories.id', 'posts.category_id')->select('categories.id','name')->groupBy('posts.category_id')->orderBy('name')->get();
        $lastPost = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(1)->get();

        return view('post.index', compact('posts', 'authors', 'categories', 'lastPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $imageName = $request->image->store('posts');

        Post::create([

            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName

        ]);

        return redirect()->route('posts.index')->with('success', 'Votre article a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
