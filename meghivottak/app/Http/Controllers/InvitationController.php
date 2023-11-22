<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(){
        $invs = response()->json(Invitation::all());
        return $invs;
    }

    public function show($id){
        $inv = response()->json(Invitation::find($id));
        return $inv;
    }

    public function store(Request $request){
        $inv = new Invitation();
        $inv->appeared = $request->appeared;
        $inv->event_id = $request->event_id;
        $inv->user_id = $request->user_id;

        $inv->save();
    }

    public function update(Request $request, $id){
        $inv = Invitation::find($id);
        $inv->appeared = $request->appeared;
        $inv->event_id = $request->event_id;
        $inv->user_id = $request->user_id;
        $inv->save();
    }

    public function destroy($id){
        $inv = Invitation::find($id);       
         $inv->delete();
    }
}
