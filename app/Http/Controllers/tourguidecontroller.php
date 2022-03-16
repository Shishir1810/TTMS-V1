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
        tourguide::create([
            'tourguide_name'=>$request-> tourguide_name,
            'tourguide_phone'=>$request-> tourguide_phone,
            'tourguide_email'=>$request-> tourguide_email,
            'tourguide_address'=>$request-> tourguide_address,
        ]);
        return redirect()->back(); //
}
}
