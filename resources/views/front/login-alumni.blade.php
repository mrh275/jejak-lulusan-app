@extends('layout.page')

@section('content')
    <div class="left-content">
        <h1 class="welcome">
            Selamat Datang <br>
            di <span class="portal-jejak">Portal Jejak Kelulusan</span> <br>
            SMAN 1 Rawamerta
        </h1>
    </div>
    <div class="right-content">
        <div class="card login">
            <div class="card-header">
                <h3 class="title">
                    Login Alumni
                </h3>
            </div>
            <div class="card-body">
                <p class="login-label">
                    Silahkan login terlebih dahulu!
                </p>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login/alumni" class="form-login" method="post">
                    @csrf
                    <div class="username-input-wrapper">
                        <input type="text" class="form-control peer @error('username')
                            is-invalid
                        @enderror" id="input-user" name="nisn" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                        <label for="input-user" class="user-label peer-placeholder-shown:text-lg peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-base peer-focus:text-gray-600">Username</label>
                    </div>
                    <div class="password-input-wrapper">
                        <input type="password" class="form-control peer @error('password')
                        is-invalid
                    @enderror" id="input-password" name="nis" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                        <label for="input-password" class="password-label peer-placeholder-shown:text-lg peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-base peer-focus:text-gray-600">Password</label>
                    </div>
                    <div class="button-wrapper">
                        <button class="btn btn-primary" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
