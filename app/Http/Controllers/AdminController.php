<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepositoryEloquent;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function posts(Request $request)
    {
        $posts = $this->repository
                      ->with(['category', 'user'])->latest()
                    //   ->orderBy('created_at', 'desc')
                      ->paginate(5);

        return view('admin.posts', compact('posts'));

    }

    public function users()
    {
        $users =  User::select('profile_photo_path', 'name','email', 'role', 'created_at')->orderBy('role', 'DESC' )->get();

        
        
        return view('admin.users', compact('users'));
    }

}
