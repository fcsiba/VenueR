<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function loginaccess(Request $request)
    {
        
        $users=AdminUser::where("email",$request->input("email"))->get();
        if(count($users)>0)
        {
            return view('signup')->with('errorMsg','Email is already is use .');
        }
        $usr=new AdminUser();
        $usr->first_name=$request->input("fname");
        $usr->last_name=$request->input("lname");
        $usr->email=$request->input("email");
        $usr->password=Hash::make($request->input("pass"));
        $usr->activated=1;
        $usr->cnic=$request->input("cnic");
        $usr->save();
        return redirect('/admin/login');
    }
}
