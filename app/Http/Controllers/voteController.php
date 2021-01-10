<?php

namespace App\Http\Controllers;
use App\Models\vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kandidat;


class voteController extends Controller
{

    public function __construct()
    {

    }

    public function vote(){
        $test = vote::all()->where('user_id',Auth::user()->id);
        $kandidat = kandidat::all();
        return view('vote',['test'=>$test] , ['kandidat' => $kandidat]);
    }
    public function quick(){
        $kandidat = kandidat::all();
        return view('quick',['kandidat' => $kandidat ]);
    }

    public function votes($id,$ids){
        $vote = new vote();
        $vote->user_id = $ids;
        $vote->kandidat_id = $id;
        $vote->save();
        return redirect('/quick');
    }
}
