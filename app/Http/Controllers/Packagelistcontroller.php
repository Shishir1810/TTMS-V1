<?php

namespace App\Http\Controllers;
use App\Models\packagelist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Packagelistcontroller extends Controller
{
    public function packagelist()
    {
        
        $packagelist = packagelist::all();
        return view('pages.packagelist',compact('packagelist'));
    }
    public function create()
    {
        return view('pages.packagelistcreate');
    }
    public function store(Request $request)
    {
        packagelist::create([
            'packagelist_name'=>$request-> packagelist_name,
            'packagelist_place'=>$request-> packagelist_place,
            'packagelist_hotel'=>$request-> packagelist_hotel,
            'packagelist_transport'=>$request-> packagelist_transport,
            'packagelist_type'=>$request-> packagelist_type,
            'packagelist_cost'=>$request-> packagelist_cost,
            'packagelist_person'=>$request-> packagelist_person,
            'packagelist_date'=>$request-> packagelist_date,
        ]);
        return redirect()->route('packagelist');
} 
 public function delete($id){
    $delete = packagelist::find($id);
    $delete->delete();
    return redirect()->back();

 }
 // go to edit form
 public function edit($id){

    $packagelistedit = packagelist::find($id);
    return view('pages.packagelistedit', compact('packagelistedit'));


}
public function update(Request $request, $id){

    $packagelistedit = packagelist::find($id);
    $packagelistedit->update([

        'packagelist_name'=>$request-> packagelist_name,
        'packagelist_place'=>$request-> packagelist_place,
        'packagelist_hotel'=>$request-> packagelist_hotel,
        'packagelist_transport'=>$request-> packagelist_transport,
        'packagelist_type'=>$request-> packagelist_type,
        'packagelist_cost'=>$request-> packagelist_cost,
        'packagelist_person'=>$request-> packagelist_person,
        'packagelist_date'=>$request-> packagelist_date,

    ]);
    return redirect()->route('packagelist');


}
}
