<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
class postsController extends Controller {

    public function getPosts(){
        $listPosts= Posts::all();
        return view('listPosts',compact('listPosts'));
    }
    public function index(){
        $posts = Posts::with('link')->get();
    }
}