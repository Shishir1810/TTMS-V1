<?php

namespace App\Http\Controllers;
use App\Models\hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class hotelcontroller extends Controller
{
    public function hotel()
    {
        
        $hotel=hotel::all();
        return view('pages.hotel', compact('hotel'));
    }
    public function create()
    {
        return view('pages.hotelcreate');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/hotel',$filename);
        }
        hotel::create([
            'hotel_name'=>$request-> hotel_name,
            'hotel_price'=>$request-> hotel_price,
            'hotel_type'=>$request-> hotel_type,
            'hotel_type'=>$request-> hotel_location,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('hotel');
}
        public function delete($id)
        {
            $delete = hotel::find($id);
            $delete->delete();
            return redirect()->back();
        }

        // go to edit form
        public function edit($id){

            $hoteledit = hotel::find($id);
            return view('pages.hoteledit', compact('hoteledit'));


        }
        public function update(Request $request, $id){
            $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/hotel',$filename);
        }

            $hoteledit = hotel::find($id);
            $hoteledit->update([

            'hotel_name'=>$request-> hotel_name,
            'hotel_price'=>$request-> hotel_price,
            'hotel_type'=>$request-> hotel_type,
            'hotel_type'=>$request-> hotel_location,
            'filebutton'=>$filename,

            ]);
            return redirect()->route('hotel');


        }
}