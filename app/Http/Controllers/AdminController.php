<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

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
        $users =  User::select('profile_photo_path', 'name','email', 'role', 'created_at', 'id')
        ->orderBy('role', 'DESC' )->get();    
        
        return view('admin.users', compact('users'));
    }

    public function destroy( $id )
    {
        // $users = User::where('*')->delete();
        if (User::select('role')!='admin'){
            $id = user::find($id);
        $id->posts()->delete();
        $id->delete();
     
    
        
        return redirect()->route('admin.user');
        }else{
            abort(403);
        }
     }
}
