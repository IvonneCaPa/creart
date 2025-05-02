<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        return view('events.index');
    }

    public function create(){
        return view('events.create');
    }

    public function show($event){
        //return view('news.show', ['new' => $new]); //otra manera
        return view('events.show', compact('event'));
        
    }
}
