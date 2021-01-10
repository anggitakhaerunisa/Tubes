@extends('layouts.app')

@section('style')

@endsection

@section('content')

    <h1 align="center" style="font-size: 50px"> Bagaimana Cara Melakukan Voting?</h1>

    <div class="container" style="margin-top: 70px">
        <div class="row">
            <div class="col-sm">
                <img src="{{asset('/img/question.svg')}}"  style="margin-right: 30px">
            </div>
            <div class="col-sm" style="margin-left: 30px;font-size: 20px;padding-top: 50px">
                <p>1. Pastikan anda sudah menyelesaikan proses Register, setelah itu lakukanlah Login dengan cara mengklik logo Login pada pojok kanan layar anda.</p>
                <br>
                <p>2. Setelah itu akan muncul calon kandidat dari kepala desa.</p>
            </div>
        </div>


        <div class="row" style="margin-top: 30px;">
            <div class="col-sm" style="margin-left: 30px;font-size: 20px;padding-top: 50px">
                <p>3. Pastikan anda sudah membaca visi dan misi dari para calon kandidat serta sudah yakin.</p>   <br>
                <p>4.  Pilih calon kandidat yang anda inginkan, seperti contoh gambar disamping </p> <br>
                <p>5. Kemudian pencet tombol Voting.</p>
            </div>
            <div class="col-sm" style="margin-left: 70px;font-size: 25px">
                <img src="{{asset('/img/test.png')}}"  style="margin-left: 100px;height: 350px">
            </div>
        </div>
    </div>

    <div style=" display: flex;
        align-items: center;
         justify-content: center;">
        @if(Auth::check())
        <a type="button" href="/vote" class="btn btn-warning" style="width: 60%;margin-top: 50px; text-align: center">Voting sekarang</a>
        @else
            <a type="button" href="/login" class="btn btn-warning" style="width: 60%;margin-top: 50px; text-align: center">Login Dahulu Sebelum Vote</a>
        @endif
    </div


@endsection
