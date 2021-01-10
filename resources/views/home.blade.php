@extends('layouts.app')


@section('style')

@endsection

@section('content')


    <div class="container justify-content-center" style="margin-top: 10px">

        <h1 align="center">Daftar Kandidat</h1>

            <div style="display: flex;margin-top: 70px;justify-content: center">
                @foreach($kandidat as $kandidat)
                <div class="card border-primary" style="width: 18rem ; margin-right: 50px">
                    <img src="{{asset('img/avatar.svg')}}" style="width: 65%;margin: 0 auto ; margin-top: 50px" class="card-img-top" alt="...">
                    <hr>
                    <div class="card-body">
                        <p class="card-text"> No urut : {{ $kandidat->id }}</p>
                        <p class="card-text"> Nama Lengkap : {{$kandidat->nama}}</p>
                        <p class="card-text"> TTL : {{$kandidat->tanggal_lahir}}</p>
                        <p class="card-text"> Agama : {{$kandidat->agama}}</p>
                        <p class="card-text"> Alamat :{{$kandidat -> alamat}}</p>
                        <p class="card-text"> Pendidikan Terakhir : {{$kandidat -> pendidikan_terakhir}} </p>
                        <p class="card-text">Visi : {{$kandidat->visi}}</p>
                        <p class="card-text">Misi : {{$kandidat->misi}}</p>
                        <p class="card-text">Email : {{$kandidat->email}}</p>

                    </div>
                </div>
                @endforeach
            </div>

        <div style=" display: flex;
  align-items: center;
  justify-content: center;">
        <a type="button" href="/langkah" class="btn btn-warning" style="width: 60%;margin-top: 50px; text-align: center">Langkah Memilih Calon Pasangan Pemilhan Umum </a>

        </div> </div>

@endsection
