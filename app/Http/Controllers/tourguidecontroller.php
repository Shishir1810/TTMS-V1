<?php

namespace App\Http\Controllers;
use App\Models\tourguide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tourguidecontroller extends Controller
{
    public function tourguide()
    {
        
        $tourguide = tourguide::all();
        return view('pages.tourguide',compact('tourguide'));
    }
    public function create()
    {
        return view('pages.tourguidecreate');
    }
    public function store(Request $request)
    {
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/tourguide',$filename);
        }

        tourguide::create([
            'tourguide_name'=>$request-> tourguide_name,
            'tourguide_phone'=>$request-> tourguide_phone,
            'tourguide_email'=>$request-> tourguide_email,
            'tourguide_address'=>$request-> tourguide_address,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('tourguide');
}
public function delete($id)
{
    $delete =tourguide::find($id);
    $delete ->delete();
    return redirect()->back();
}
// go to edit form
public function edit($id){

    $hoteledit = hotel::find($id);
    return view('pages.tourguideedit', compact('tourguideedit'));


}
public function update(Request $request, $id){

    $tourguideedit = tourguide::find($id);
    $tourguideedit->update([

        'tourguide_name'=>$request-> tourguide_name,
        'tourguide_phone'=>$request-> tourguide_phone,
        'tourguide_email'=>$request-> tourguide_email,
        'tourguide_address'=>$request-> tourguide_address,

    ]);
    return redirect()->route('tourguide');


}
}
