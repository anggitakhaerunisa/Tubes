@extends('layouts.app')
@section('content')
    <svg style="position: absolute;bottom: -70px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3490dc" fill-opacity="1" d="M0,128L34.3,133.3C68.6,139,137,149,206,160C274.3,171,343,181,411,165.3C480,149,549,107,617,112C685.7,117,754,171,823,192C891.4,213,960,203,1029,181.3C1097.1,160,1166,128,1234,106.7C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

    <div class="container justify-content-center">

        <form method="post" action="/loginadmin">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Admin</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="id" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


@endsection
