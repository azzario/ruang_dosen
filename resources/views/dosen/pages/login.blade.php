@extends('template.master')
  @section('title', 'Login')
  
  @section('styles')
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
  @endsection

  @section('content')
    <div class="container">
      <h3 class="text-center display-4 welcome">Selamat Datang</h3>
      <div class="row justify-content-md-center">
        <div class="col-md-5 wrap-login shadow-sm rounded">
          <form action="{{ url('/login/dosen') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" class="form-control rounded {{ $errors->has('nidn') ? 'is-invalid' : '' }}" placeholder="NIDN" name="nidn">
              @if($errors->has('nidn'))
                <small class="form-text text-muted">{{ $errors->first('nidn') }}</small>
              @endif
            </div>
            <div class="form-group">
              <input type="password" class="form-control rounded {{ $errors->has('password') ? 'is-invalid' : '' }}"" placeholder="Password" name="password">
              @if($errors->has('password'))
                <small class="form-text text-muted">{{ $errors->first('password') }}</small>
              @endif
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Login</button>
              <small class="form-text text-muted">Kamu mahasiswa ? login <a href="">disini</a></small>
          </form>
        </div>
      </div>
    </div>
  @endsection