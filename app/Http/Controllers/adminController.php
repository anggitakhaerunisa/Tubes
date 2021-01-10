<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use App\Models\kandidat;
use App\Models\vote;

class adminController extends Controller
{
    public function login(){
        return view('loginadmin');
    }
    public function loginfunc(Request $data){
        $admin = admin::all()->where('name',$data->id)->first();
        if ($admin->password == $data->password){
            return redirect('admin/dashboard');
        } else{
            return redirect('/loginadmin')->with(['gagal' => 'login gagal']);
        }

    }

    public function dashboard(){
        $user = User::all();
        $kan = kandidat::all();
        $vote = vote::all();
        return view('dashboard',['user' => $user , 'kandidat'=>$kan,'vote'=>$vote]);
    }
}
