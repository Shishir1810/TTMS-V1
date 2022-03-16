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
        hotel::create([
            'hotel_name'=>$request-> hotel_name,
            'hotel_price'=>$request-> hotel_price,
            'hotel_type'=>$request-> hotel_type,
        ]);
        return redirect()->back(); //
}
}