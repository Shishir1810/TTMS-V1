<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
Session_start();

class superadmincontroller extends Controller
{
    public function master(){
        $this->AdminAuthCheck();
        return view('master');
    }
    public function logout(){
        Session::flush();
        return redirect()->route('index');
    }

    public function AdminAuthCheck(){
        $aid=Session::get('id');
        if($aid){
            return;
        }
        else{
           return redirect()->route('index')->send();  
        }
       
    }
}
