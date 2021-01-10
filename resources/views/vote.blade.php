@extends('layouts.app')


@section('style')

@endsection

@section('content')

    <div class="container justify-content-center" style="margin-top: 10px">
        <h1 align="center">Vote Kandidat</h1>


        <div style="display: flex;margin-top: 70px;justify-content: center">
            @foreach($kandidat as $kandidat)
            <div class="card border-primary" style="width: 18rem ; margin-right: 50px">
                <img src="{{asset('img/avatar.svg')}}" style="width: 65%;margin: 0 auto ; margin-top: 50px" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <p class="card-text"> No urut : {{$kandidat->id}}</p>
                    <p class="card-text"> Nama : {{$kandidat->nama}}</p>
                    <p class="card-text"> Visi : {{$kandidat->visi}}</p>
                    <p class="card-text"> Misi : {{$kandidat->misi}}</p>


                </div>
                <div class="card-footer">
                    @if(count($test) == 0)
                    <a href="votes/{{$kandidat->id}}/{{Auth::user()->id}}" class="btn btn-success" style="width: 100%">Vote</a>
                    @else
                        <p>Anda sudah melakukan Voting</p>
                    @endif
                </div>
            </div>
            @endforeach


        </div>
    </div>
    <svg style="position: absolute;bottom: -500px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L30,160C60,160,120,160,180,138.7C240,117,300,75,360,74.7C420,75,480,117,540,138.7C600,160,660,160,720,144C780,128,840,96,900,74.7C960,53,1020,43,1080,42.7C1140,43,1200,53,1260,58.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>



@endsection
