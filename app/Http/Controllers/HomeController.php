<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories\Categories;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        // $tags = Tags::all();
        
        return view('welcome')->withCategories($categories);
    }
}
