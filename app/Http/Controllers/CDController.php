<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Model\CD;


class CDController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        
    }

    public function showAll()
    {
        $data = CD::all();
        return response($data);
    }

    public function get($id)
    {
        $data = CD::where('id',$id)->get();
        return response ($data);
    }

    public function store(Request $request)
    {
        $data = new CD();
        $data->title = $request->input('title');
        $data->category = $request->input('category');
        $data->rating = $request->input('rating');
        $data->quantity = $request->input('quantity');
        $data->save();

        return response()->json($data);
    }

    public function update(Request $request, $id){
        $data = CD::where('id',$id)->first();
        $data->title = $request->input('title');
        $data->category = $request->input('category');
        $data->rating = $request->input('rating');
        $data->quantity = $request->input('quantity');
        $data->save();
    
        return response('Updated');
    }
    
    public function destroy($id){
        $data = CD::where('id',$id)->first();
        $data->delete();
    
        return response('Deleted');
    }
}