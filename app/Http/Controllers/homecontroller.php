<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\place;
use App\Models\gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function homemaster()
    {
    

    return view('frontend.home');
    } 
    public function ghomemaster()
    {
     
      $data=gallery::all();

   return view('frontend.home',compact('data'));
   }

    public function registration(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
         ]);
    
         User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'tourist',
         ]);
    
         return redirect()->back();
      }
}
