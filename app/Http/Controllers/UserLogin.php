<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    function UserAuth(Request $req){
        $form_data = $req->input('username');

        $req->session()->put("UserName",$form_data);

        $req->session()->flash("user",$form_data." login successfully");

        if(session()->has("UserName")){
            return redirect("profile");
        }else{
            return redirect("login");
        }
    }
}
