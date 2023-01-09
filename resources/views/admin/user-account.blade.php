@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Edit Akun</h1>
        <div class="container">
            <form action="" class="form-group" id="update-account">
                @csrf
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Lengkap</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="name" class="form-control" id="input-nama" value="{{ $user->name ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-username">Username</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="username" class="form-control" id="input-username" value="{{ $user->username ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-email">Email</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="email" name="email" class="form-control" id="input-email" value="{{ $user->email ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-password">Password</label>
                    </div>
                    <div class="input-wrapper" style="display: block">
                        <input type="password" name="password" class="form-control" id="input-password">
                        <small>Leave it blank if you don't want to change your password!</small>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-password">Confirm Password</label>
                    </div>
                    <div class="input-wrapper" style="display: block">
                        <input type="password" name="password-confirm" class="form-control" id="password-confirm">
                        <small>Leave it blank if you don't want to change your password!</small>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">

                    </div>
                    <div class="input-wrapper show-password-wrapper">
                        <input type="checkbox" id="show-password" onchange="showPassword(event)">
                        <label for="show-password" class="show-password">&nbsp;Show Password</label>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">

                    </div>
                    <div class="input-wrapper">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function showPassword(e) {
            if (e.target.checked === true) {
                document.getElementById('input-password').type = 'text'
                document.getElementById('password-confirm').type = 'text'
            } else {
                document.getElementById('input-password').type = 'password'
                document.getElementById('password-confirm').type = 'password'
            }
        }

        $('form#update-account').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                url: "{{ url('admin/user/update') }}",
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    Swal.fire({
                            title: 'Sedang menyimpan data...',
                            didOpen: () => {
                                Swal.showLoading()
                            },
                            timer: 2000,
                            width: '30rem',
                        })
                        .then((dismiss) => {
                            Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil disimpan',
                                    padding: '1rem',
                                })
                                .then((result) => {
                                    if (result.value) {
                                        location.reload();
                                    }
                                });;
                        });
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    </script>
@endpush
