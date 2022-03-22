<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plush;

class PlushController extends Controller
{
    public function index(){
        $plush = Plush::all();
        return response()->json($plush);
    }

    public function store(Plush $plush, Request $request){
        $plush = new Plush();
        $plush->fill($request->all());
        $plush->save();
        return response($plush, 201);
    }

    public function show(Plush $plush){
        return response()->json($plush);
    }

    public function update(Plush $plush, Request $request){
        $plush->fill($request->all());
        $plush->save();
        return response($plush, 200);
    }
    
    public function destroy(int $id){
        Plush::destroy($id);
        return response()->noContent();
    }
}
