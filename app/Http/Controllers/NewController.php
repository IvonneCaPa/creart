<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        return view('news.index');
    }

    public function create(){
        return view('news.create');
    }

    public function show($new){
        //return view('news.show', ['new' => $new]); //otra manera
        return view('news.show', compact('new'));
        
    }
}
