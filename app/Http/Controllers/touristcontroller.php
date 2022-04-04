<?php

namespace App\Http\Controllers;
use App\Models\tourist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class touristcontroller extends Controller
{
    public function tourist()
    {
        
        $tourist = tourist::all();
        return view('pages.tourist',compact('tourist'));
    }
    public function create()
    {
        return view('pages.touristcreate');
    }
    public function store(Request $request)
    {
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/tourist',$filename);
        }
        tourist::create([
            'tourist_name'=>$request-> tourist_name,
            'tourist_phone'=>$request-> tourist_phone,
            'tourist_email'=>$request-> tourist_email,
            'tourist_username'=>$request-> tourist_username,
            'tourist_password'=>$request-> tourist_password,
            'tourist_address'=>$request-> tourist_address,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('tourist');
}
public function delete($id)
{
    $delete =tourist::find($id);
    $delete ->delete();
    return redirect()->back();
}
// go to edit form
public function edit($id){

    $touristedit = tourist::find($id);
    return view('pages.touristedit', compact('touristedit'));


}
public function update(Request $request, $id){
    $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/tourist',$filename);
        }

    $touristedit = tourist::find($id);
    $touristedit->update([

        'tourist_name'=>$request-> tourist_name,
        'tourist_phone'=>$request-> tourist_phone,
        'tourist_email'=>$request-> tourist_email,
        'tourist_username'=>$request-> tourist_username,
        'tourist_password'=>$request-> tourist_password,
        'tourist_address'=>$request-> tourist_address,
        'filebutton'=>$filename,

    ]);
    return redirect()->route('tourist');


}
}
