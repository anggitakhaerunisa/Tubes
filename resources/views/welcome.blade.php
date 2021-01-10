@extends('layouts.app')


@push('style')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush

@section('content')
    <svg style="position: absolute;bottom: 0px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    @if ($message = Session::get('gagal'))
    <div class="alert alert-danger" role="alert">
        Login gagal
    </div>
    @endif

    <div class="container" style="margin-top: 70px">
        <div class="row">
            <div class="col-sm">
                <img src="{{asset('img/voting.svg')}}" style="width: 100%">
            </div>
            <div class="col-sm" style="margin-left: 120px">
                <h1 style="font-size: 50px;color: white">PEMILIHAN UMUM KEPALA DESA BOJONGSOANG</h1>
                <p style="margin-top: 50px;color: white">Selamat Datang di Sistem Informasi E-Voting Berbasis Web Untuk Pemilihan Kepala Desa Bojongsoang tahun 2020.</p>
                <a type="button" class="btn btn-outline-warning" style="margin-right: 10px" href="/home">Lihat kandidat</a>
                <a type="button" class="btn btn-success" href="/langkah">Voting sekarang</a>
            </div>
        </div>

    </div>



    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

@endsection
