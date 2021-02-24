<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailAvailable extends Controller
{
    public function index(){
        return view('email_available');
    }
    public function check(Request $request){
        if($request->get('email')){
            $email = $request->get('email');
            $data = DB::table("tbl_login")->where('email',$email)->count();
            if($data>0){
                echo 'not_unique';
            }
            else{
                echo 'unique';
            }
        }
    }


}
