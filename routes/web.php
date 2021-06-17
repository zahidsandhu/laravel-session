<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



route::view("login","login");

route::post("submitform",[UserLogin::class,"UserAuth"]);

Route::group(['middleware'=>['checklogin']],function(){
    Route::view("profile","userprofile");

    route::view("dashboard","dashboard");
    Route::get('/', function () {
        return view('welcome');
    });

    // logout page 
    Route::get("logout",function(){

        if(session()->has("UserName")){
            session()->pull("UserName",null);
    
            return redirect("login");
            exit();
        }
    });

});




