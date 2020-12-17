<?php

namespace App\Http\Controllers\Auth;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facacdes\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('auth.password.change');
    }
    public function changePassword(Request $req)
    {
        $this->validate($request,[
            'oldpassword'=>'required',
            'password'=>'required|confirmed'


        ]);
        $hashedPassword=Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword))
        {
            $user=User::find(Auth::id());
            $user->password=Hash::make($req->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg',"Password is Changed Successfully");
        }
        else
        {
            return redirect()->back()->with('errorMsg',"Current Passowrd is Invalid");
        }
    }

}
