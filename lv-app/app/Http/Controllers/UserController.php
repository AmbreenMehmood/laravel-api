<?php

namespace App\Http\Controllers;

use App\Models\Home;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getdata(){
        return["name"=>"ambreen mehmood","email"=>"abc@gmail.com","password"=>"123"];
    }
    function list(){
return Home::all();
    }
    function add(Request $req){
        $user=new Home;
        $user->name=$req->name;
        $user->password=$req->password;
        $user->email=$req->email;
        $result=$user->save();
        if($result){
            return ['result'=>'data has been saved'];
        }
        else{
            return ['result'=>'data has not been saved :('];

        }

       
    }
    function update(Request $req){
        $user=Home::find($req->id);
        $user->name=$req->name;
        $user->id=$req->id;
        $result=$user->save();
        if($result){
            return["result"=>"data is updated"];
        }
        else{
            return["result"=>"data is not updated :("];

        }
       
    }
    function delete($id){
        $user=Home::find($id);
        $result=$user->delete();
        if($result){
            return["result"=>"record has been deleted"];
        }
        else{
            return["result"=>"something went wrong :("];

        }
        
    }
}
