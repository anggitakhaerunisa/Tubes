@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">

        <div style=" display: flex;
  align-items: center;
  justify-content: center;">
            <img src="{{asset('img/avatar.svg')}}" style="width: 200px ; margin: 0 auto">

        </div>




        <h1 align="center" style="margin-top: 10px">Profile</h1>

        <form action="" method="post">
            @csrf
            @method('POST')

        <h3>Nama : </h3>
        <input type="text" name="name" value="{{Auth::user()->name}}" style="width: 100%">
        <h3>Email :</h3>
            <input type="email" name="email" value="{{Auth::user()->email}}" style="width: 100%">
            <h3>No. Handphone :</h3>
            <input type="number" name="no_hp" value="{{Auth::user()->no_hp}}" style="width: 100%">
            <h3>NIK</h3>
            <input type="number" name="NIK" value="{{Auth::user()->NIK}}" style="width: 100%">
            <button type="submit" class="btn btn-primary" value="Save" style="width: 100%;margin-top: 50px">Save</button>
        </form>
    </div>
@endsection
