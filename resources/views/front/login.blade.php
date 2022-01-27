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
                    Login Akun
                </h3>
            </div>
            <div class="card-body">
                <p class="login-label">
                    Silahkan login terlebih dahulu!
                </p>
                <form action="" class="form-login" method="post">
                    <div class="username-input-wrapper">
                        <input type="text" class="form-control peer" id="input-user" placeholder="Username">
                        <label for="input-user" class="user-label peer-placeholder-shown:text-lg peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-base peer-focus:text-gray-600">Username</label>
                    </div>
                    <div class="password-input-wrapper">
                        <input type="text" class="form-control peer" id="input-password" placeholder="Password">
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
