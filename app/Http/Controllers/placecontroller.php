<?php

namespace App\Http\Controllers;
use App\Models\place;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class placecontroller extends Controller
{
    public function place()
    {
        
        $place=place::all();
        return view('pages.place', compact('place'));
    }
    public function create()
    {
        return view('pages.placecreate');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/place',$filename);
        }
        place::create([
            'place_name'=>$request-> place_name,
            'place_location'=>$request-> place_location,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('place');
}
        public function delete($id)
        {
            $delete = place::find($id);
            $delete->delete();
            return redirect()->back();
        }

        // go to edit form
        public function edit($id){

            $placeedit = place::find($id);
            return view('pages.placeedit', compact('placeedit'));


        }
        public function update(Request $request, $id){
            $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/place',$filename);
        }

            $placeedit = place::find($id);
            $placeedit->update([

            'place_name'=>$request-> place_name,
            'place_location'=>$request-> place_location,
            'filebutton'=>$filename,

            ]);
            return redirect()->route('place');


        }
}
