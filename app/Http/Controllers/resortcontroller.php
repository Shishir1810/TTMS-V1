<?php

namespace App\Http\Controllers;
use App\Models\resort;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class resortcontroller extends Controller
{
    public function resort()
    {
        
        $resort=resort::all();
        return view('pages.resort', compact('resort'));
    }
    public function create()
    {
        return view('pages.resortcreate');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/resort',$filename);
        }
        resort::create([
            'resort_name'=>$request-> resort_name,
            'resort_rent'=>$request->resort_rent,
            'resort_type'=>$request-> resort_type,
            'resort_location'=>$request-> resort_location,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('resort');
}
        public function delete($id)
        {
            $delete = resort::find($id);
            $delete->delete();
            return redirect()->back();
        }

        // go to edit form
        public function edit($id){

            $resortedit = resort::find($id);
            return view('pages.resortedit', compact('resortedit'));


        }
        public function update(Request $request, $id){
            $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/resort',$filename);
        }

            $resortedit = resort::find($id);
            $resortedit->update([

            'resort_name'=>$request-> resort_name,
            'resort_rent'=>$request->resort_rent,
            'resort_type'=>$request-> resort_type,
            'resort_location'=>$request-> resort_location,
            'filebutton'=>$filename,

            ]);
            return redirect()->route('resort');


        }
}
