<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = response()->json(Event::all());
        return $events;
    }

    public function show($id){
        $event = response()->json(Event::find($id));
        return $event;
    }

    public function store(Request $request){
        $event = new Event();
        $event->date = $request->date;
        $event->location = $request->location;
        $event->org_id = $request->org_id;

        $event->save();
    }

    public function update(Request $request, $id){
        $event = Event::find($id);
        $event->date = $request->date;
        $event->location = $request->location;
        $event->org_id = $request->org_id;
        $event->save();
    }

    public function destroy($id){
        $event = Event::find($id);       
         $event->delete();
    }
}
