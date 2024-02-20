@extends('layouts.master')

@section('content')

<div class="">
    <div class="row justify-content-center align-items-center mt-5 ">
        <div class="col-4 p-4 bg-light rounded">
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="mb-3">
                    <h4>Administrator Login</h4>
                    <h6 class="fw-light">Sign in to continue.</h6>
                    <p>
                        <code>include session status(errors)</code>

                    </p>
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Enter your work email.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
