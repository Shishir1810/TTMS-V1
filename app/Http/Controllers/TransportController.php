<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportController extends Controller
{
    public function transport()
    {
        
        $transport = Transport::all();
        return view('pages.transport', compact('transport'));
    }
    public function create()
    {
        return view('pages.transportcreate');
    }
    public function store(Request $request)
    {
        $filename = null;
        if($request -> hasFile('filebutton')){
            $file=$request->file('filebutton');
            $filename = date('Ymdhsis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/transport',$filename);
        }
        Transport::create([
            'transport_name'=>$request-> transport_name,
            'transport_price'=>$request-> transport_price,
            'transport_type'=>$request-> transport_type,
            'filebutton'=>$filename,
        ]);
        return redirect()->route('transport');
    }
    public function delete($id)
    {
        $delete = Transport::find($id);
        $delete-> delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $transportedit =Transport::find($id);
        return view('pages.transportedit',compact('transportedit'));
    }
    public function update(Request $request, $id){
        $transportedit =Transport::find($id);
        $transportedit->update([
            'transport_name'=>$request-> transport_name,
            'transport_price'=>$request-> transport_price,
            'transport_type'=>$request-> transport_type,

        ]);
        return redirect()->route('transport');
    }
}
