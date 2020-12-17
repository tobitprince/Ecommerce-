<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;   
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return redirect()->back()->with('errorMsg',"Current Passowrd is Invalid");
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login')->with('success','Product successfully added.');

    }
    
    public function changePassword(Request $req)
    {
        $this->validate($req,[
            'oldpassword'=>'password',
            'password'=>'password'


        ]);
        $hashedPassword=Auth::user()->password;
        if(Hash::check($req->oldpassword,$hashedPassword))
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
