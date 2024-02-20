@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('agent.login') }}">
    @csrf
    <div class="mb-3">
        <h4>Agent Login</h4>
        <h6 class="fw-light">Sign in to continue.</h6>
        <code>include session status</code>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Enter your work email.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
        <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <span>Forgot your password? <a href='#'>Notify An Administrator</a></span>
</form>

@endsection
