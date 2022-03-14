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
    public function craete()
    {
        return view('pages.transporcreate');
    }
    public function store(Request $request)
    {
        Transport::create([
            'transport_name'=>$request-> transport_name,
            'transport_price'=>$request-> transport_price,
            'transport_type'=>$request-> transport_type,
        ]);
        return redirect()->back();
    }
}
