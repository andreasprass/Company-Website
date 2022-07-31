@extends('layouts.navbar_footer',['title'=>'Reset Password'])
@section('content')
<main>
    <div class="heading position-relative" style="margin-top: 170px">
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
        @endif
        <div>
          <a href="{{ route('login') }}">Login</a>
        </div>
        <div>
          <a href="{{ route('register') }}">Register</a>
        </div>
        <form action="{{ route('password_email') }}" method="post">
            @csrf
            <label>Alamat Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
              <div class="form-control invalid-tooltip">
                {{ $message }}
              </div>
            @enderror
            <button type="submit" class="btn">Send Password Reset Link</button>
        </form>
    </div>
</main>
@endsection