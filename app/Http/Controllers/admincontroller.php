<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class admincontroller extends Controller
{
    public function admin()
    {
        
        $admin = admin::all();
        return view('pages.admin',compact('admin'));
    }
    public function create()
    {
        return view('pages.admincreate');
    }
    public function store(Request $request)
    { 
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/admin',$filename);
        }
        admin::create([
            'admin_name'=>$request-> admin_name,
            'admin_designation'=>$request-> admin_designation,
            'admin_phone'=>$request-> admin_phone,
            'admin_email'=>$request-> admin_email,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('admin');
}
public function delete($id)
{
    $delete =admin::find($id);
    $delete ->delete();
    return redirect()->back();
}
// go to edit form
public function edit($id){

    $adminedit = admin::find($id);
    return view('pages.adminedit', compact('adminedit'));


}
public function update(Request $request, $id){
    $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/admin',$filename);
        }

    $adminedit = admin::find($id);
    $adminedit->update([

        'admin_name'=>$request-> admin_name,
        'admin_designation'=>$request-> admin_designation,
        'admin_phone'=>$request-> admin_phone,
        'admin_email'=>$request-> admin_email,
        'filebutton'=>$filename,
        

    ]);
    return redirect()->route('admin');


}
}
