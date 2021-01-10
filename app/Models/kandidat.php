<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kandidat extends Model
{
    use HasFactory;
    protected $table = 'kandidat';
    public $timestamps = false;

    public function voteuser(){
        return $this->belongsToMany('App\Models\User','vote','kandidat_id','user_id');
    }


}
