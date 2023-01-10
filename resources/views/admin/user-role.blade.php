@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">User Role</h1>
        <div style="margin-top: 10px">
            <button type="button" class="btn btn-warning" id="modal-toggle"><i class='bx bxs-edit'></i> Change Role</button>
        </div>
        <div class="container">
            <table class="stripe hover table-biodata" id="table-role">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td id="username" class="{{ $item->username }}">{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td id="role" class="{{ $item->is_admin }}">{{ $item->is_admin == 1 ? 'Admin' : 'User' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@include('component.modal-role')
