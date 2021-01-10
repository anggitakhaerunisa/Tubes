<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\kandidat;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'NIK' => $data['NIK'],
            'no_hp' => $data['nope'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registercan(Request $request){
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->NIK = $request['NIK'];
        $user->no_hp = $request['nope'];
        $user->password = Hash::make($request['password']);
        $kandidat = new kandidat();
        $kandidat->nama = $request['name'];
        $kandidat->tanggal_lahir = $request['tanggal_lahir'];
        $kandidat->agama = $request['agama'];
        $kandidat->alamat = $request['alamat'];
        $kandidat->pendidikan_terakhir = $request['pendidikan'];
        $kandidat->visi = $request['visi'];
        $kandidat->misi = $request['misi'];
        $kandidat->email = $request['email'];
        $kandidat->save();
        $user->save();

        return redirect('/')->with('succes','regsiter berhasil');
    }




}
