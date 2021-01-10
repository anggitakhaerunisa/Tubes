@extends('layouts.app')

@section('content')
    <svg style="position: absolute;bottom: -300px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3490dc" fill-opacity="1" d="M0,128L34.3,133.3C68.6,139,137,149,206,160C274.3,171,343,181,411,165.3C480,149,549,107,617,112C685.7,117,754,171,823,192C891.4,213,960,203,1029,181.3C1097.1,160,1166,128,1234,106.7C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px">
            <div class="col-sm" style="margin-right: 50px">
                <img src="{{asset('img/regis.svg')}}" style="width: 100%">
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">Register Kandidat</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registercan') }}">
                            @csrf
                            @method('post')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="NIK" class="col-md-4 col-form-label text-md-right">NIK</label>

                                <div class="col-md-6">
                                    <input id="NIK" type="number" class="form-control @error('nik') is-invalid @enderror" name="NIK" value="{{ old('nik') }}" required autocomplete="NIK" autofocus>

                                    @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>


                                <div class="col-md-6">
                                    <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                                    @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>


                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pendidikan" class="col-md-4 col-form-label text-md-right">Pendidikan Terakhir</label>


                                <div class="col-md-6">
                                    <input id="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}" required autocomplete="pendidikan" autofocus>

                                    @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="agama" class="col-md-4 col-form-label text-md-right">Agama</label>


                                <div class="col-md-6">
                                    <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>

                                    @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="visi" class="col-md-4 col-form-label text-md-right">Visi</label>


                                <div class="col-md-6">
                                    <input id="visi" type="text" class="form-control @error('visi') is-invalid @enderror" name="visi" value="{{ old('visi') }}" required autocomplete="visi" autofocus>

                                    @error('visi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="misi" class="col-md-4 col-form-label text-md-right">Misi</label>


                                <div class="col-md-6">
                                    <input id="misi" type="text" class="form-control @error('misi') is-invalid @enderror" name="misi" value="{{ old('misi') }}" required autocomplete="misi" autofocus>

                                    @error('misi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nope" class="col-md-4 col-form-label text-md-right">No. Handphone</label>

                                <div class="col-md-6">
                                    <input id="nope" type="number" class="form-control @error('nope') is-invalid @enderror" name="nope" value="{{ old('nope') }}" required autocomplete="nope" autofocus>

                                    @error('nope')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button  type="submit" class="btn btn-primary">
                                        Register
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
