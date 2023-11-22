<?php

namespace App\Http\Controllers;
use App\Models\Organisator;

use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    public function index(){
        $organisators = response()->json(Organisator::all());
        return $organisators;
    }

    public function show($id){
        $organisator = response()->json(Organisator::find($id));
        return $organisator;
    }

    public function store(Request $request){
        $organisator = new Organisator();
        $organisator->name = $request->name;
        $organisator->description = $request->description;
        $organisator->save();
    }

    public function update(Request $request, $id){
        $organisator = Organisator::find($id);
        $organisator-> name = $request->name;
        $organisator->description = $request->description;
        $organisator->save();
    }

    public function destroy(Request $request, $id){
        $organisator = Organisator::find($id);        $organisator->delete();
    }
}
