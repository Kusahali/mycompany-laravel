<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
class linkController extends Controller{

    public function getlink(){
        $listlink= link::all();
        return view('listlink',compact('listlink'));
    }
    public function index(){
        $link = link::with('link')->get();
    }
}
