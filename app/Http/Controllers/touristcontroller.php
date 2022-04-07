<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class touristcontroller extends Controller
{
    public function tourist()
    {
        
        $user = User::all();
        return view('pages.tourist',compact('user'));
    }
    
    
        

public function delete($id)
{
    $delete =User::find($id);
    $delete ->delete();
    return redirect()->back();
}
}