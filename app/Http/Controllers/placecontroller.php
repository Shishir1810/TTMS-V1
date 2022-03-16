<?php

namespace App\Http\Controllers;
use App\Models\place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class placecontroller extends Controller
{
    public function place()
    {
        
        $place = place::all();
        return view('pages.place',compact('place'));
    }
    public function create()
    {
        return view('pages.placecreate');
    }
    public function store(Request $request)
    {
        place::create([
            'place_name'=>$request-> place_name,
            'place_location'=>$request-> place_location,
            'place_details'=>$request-> place_details,
        ]);
        return redirect()->back(); //
}
}
