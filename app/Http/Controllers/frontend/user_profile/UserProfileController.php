<?php

namespace App\Http\Controllers\frontend\user_profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;

class UserProfileController extends Controller
{
    private $user;
    public function __construct(){
                
        $this->middleware('auth');        
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->user->find(Auth::user()->id);
        $categories = Category::all();
        $posts = Post::where('user_id', Auth::user()->id)->with(['user', 'category', 'likes', 'comments.user' => function($query){
            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
        } ])->orderBy('id', 'desc')->paginate(10);

        // dd($posts);

        return view('frontend.user_profile.index')->withUser($user)
                                                ->withCategories($categories)
                                                ->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        $posts = Post::where('user_id', $id)->with(['user', 'category', 'likes', 'comments.user' => function($query){
            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
        } ])->orderBy('id', 'desc')->paginate(10);

        // dd($posts);

        return view('frontend.user_profile.show')->withUser($user)
                                                ->withPosts($posts);
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
