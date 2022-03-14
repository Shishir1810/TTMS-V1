<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportController extends Controller
{
    public function transport()
    {
        return view('pages.transport');
    }
    public function craete()
    {
        return view('pages.transporcreate');
    }
    public function store(Request $request)
    {
        Transport::create([
            'transport_name'=>$request-> transport_name,
        ]);
        return redirect()->back();
    }
}
