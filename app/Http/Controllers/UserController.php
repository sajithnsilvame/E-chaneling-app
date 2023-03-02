<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

class UserController extends Controller
{
    public function redirect_user(){

        
        if(Auth::id()){

            $userType = Auth::User()->user_type;
            $doc_list = Doctor::all();
            if ($userType == '1') {
                return view('admin.home');
            } else {
                return view('normal_users.home',compact('doc_list'));
            }
        }
        else{
            return redirect('login');
        }
        
    }

    public function logout(Request $request)
    {
        if(Auth::id()){
            $doc_list = Doctor::all();

            Auth::logout();
            return view('normal_users.home', compact('doc_list'));
        }
        else{
            return redirect('login');
        }   
    }
}
