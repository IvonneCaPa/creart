<?php

namespace App\Http\Controllers;
use App\Models\Event;  
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $events = Event::orderBy('id', 'desc')->paginate(10);
        
        return view('events.index', compact('events'));
    }

    public function create(){
        return view('events.create');
    }
    
    public function save(Request $request){
        $event = new Event();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->site = $request->site;
        $event->dateTime = $request->dateTime;

        $event->save();

        return redirect()->route('events.show', $event);
    }

    public function show(Event $event){
        return view('events.show', compact('event'));
    }

    public function edit(Event $event){
        // $event=Event::find($id);
        // return $event;
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event){
        $event->title = $request->title;
        $event->description = $request->description;
        $event->site = $request->site;
        $event->dateTime = $request->dateTime;

        $event->save();

        return redirect()->route('events.show', $event);
    }
}
