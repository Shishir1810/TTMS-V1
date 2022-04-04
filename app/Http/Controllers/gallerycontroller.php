<?php

namespace App\Http\Controllers;
use App\Models\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gallerycontroller extends Controller
{
    public function gallery()
    {
        
        $gallery = gallery::all();
        return view('pages.gallery',compact('gallery'));
    }
    public function create()
    {
        return view('pages.gallerycreate');
    }
    public function store(Request $request)
    {
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/gallery',$filename);
        }
        gallery::create([
            'gallery_name'=>$request-> gallery_name,
            'gallery_details'=>$request-> gallery_details,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('gallery');
}
public function delete($id)
{
    $delete = gallery::find($id);
    $delete->delete();
    return redirect()->back();
}
// go to edit form
public function edit($id){

    $galleryedit = gallery::find($id);
    return view('pages.galleryedit', compact('galleryedit'));


}
public function update(Request $request, $id){
    $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/gallery',$filename);
        }

    $galleryedit = gallery::find($id);
    $galleryedit->update([

        'gallery_name'=>$request-> gallery_name,
        'gallery_details'=>$request-> gallery_details,
        'filebutton'=>$filename,
    ]);
    return redirect()->route('gallery');


}
}
