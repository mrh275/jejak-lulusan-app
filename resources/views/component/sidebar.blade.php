<div class="sidebar expand overflow-y-auto overflow-x-hidden">
    <div class="top-side">
        <div class="img-top">
            <img src="{{ url('assets/img') }}/logo.png" alt="Logo Admin">
        </div>
        <div class="brand">
            <span class="brandName">JEJAK LULUSAN</span>
        </div>
    </div>
    <div class="menu-wrapper">
        <ul class="nav-menu">
            <li class="nav-list">
                <a href="{{ url('alumni') }}" id="dashboard" class="nav-link">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="dropdown-blank">
                    <li>
                        <a href="{{ url('alumni') }}" class="dropdown-link"><span class="link-name-collapse">Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-list dropdown">
                <a class="nav-link" id="data-diri" href="javascript:void(0)" style="cursor: pointer;">
                    &nbsp;<i class='fa fa-user'></i>
                    <span class="link-name">&nbsp;Data Diri</span>
                </a>
                <ul class="dropdown-menu hide">
                    <li>
                        <a href="javascript:void(0)" class="dropdown-link"><span class="link-name-collapse">Data Diri</span></a>
                    </li>
                    <li>
                        <a href="{{ url('alumni') }}/biodata" id="biodata" class="dropdown-link">
                            <i class='bx bxs-user-detail'></i>
                            <span class="dropdown-name">Biodata</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('alumni') }}/data-orangtua" id="data-orangtua" class="dropdown-link">
                            <i class='fa fa-users'></i>
                            <span class="dropdown-name">Data Orang Tua</span>
                        </a>
                    </li>
                    @can('admin')
                        <li>
                            <a href="{{ url('alumni') }}/datatable-biodata" id="tabel-biodata" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Biodata</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('alumni') }}/datatable-orangtua" id="tabel-orangtua" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Data Orang Tua</span>
                            </a>
                        </li>
                    @elsecan('operator')
                        <li>
                            <a href="{{ url('alumni') }}/datatable-biodata" id="tabel-biodata" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Biodata</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('alumni') }}/datatable-orangtua" id="tabel-orangtua" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Data Orang Tua</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <li class="nav-list dropdown">
                <a class="nav-link" id="kelulusan" href="javascript:void(0)" style="cursor: pointer;">
                    <i class='fa fa-graduation-cap'></i>
                    <span class="link-name">Data Kelulusan</span>
                </a>
                <ul class="dropdown-menu hide">
                    <li>
                        <a href="javascript:void(0)" class="dropdown-link"><span class="link-name-collapse">Data Kelulusan</span></a>
                    </li>
                    <li>
                        <a href="{{ url('alumni') }}/data-kuliah" id="data-kuliah" class="dropdown-link">
                            <i class='bx bxs-user-detail'></i>
                            <span class="dropdown-name">Data Kuliah</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('alumni') }}/data-pekerjaan" id="data-pekerjaan" class="dropdown-link">
                            <i class='fa fa-users'></i>
                            <span class="dropdown-name">Data Pekerjaan</span>
                        </a>
                    </li>
                    @can('admin')
                        <li>
                            <a href="{{ url('alumni') }}/datatable-kuliah" id="tabel-kuliah" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Kuliah</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('alumni') }}/datatable-pekerjaan" id="tabel-pekerjaan" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Pekerjaan</span>
                            </a>
                        </li>
                    @elsecan('operator')
                        <li>
                            <a href="{{ url('alumni') }}/datatable-kuliah" id="tabel-kuliah" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Kuliah</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('alumni') }}/datatable-pekerjaan" id="tabel-pekerjaan" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Pekerjaan</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <li class="nav-list dropdown">
                <a href="javascript:void(0)" id="user-manager" class="nav-link">
                    <i class='bx bx-user'></i>
                    <span class="link-name">User Manager</span>
                </a>
                <ul class="dropdown-menu hide">
                    <li>
                        <a href="javascript:void(0)" class="dropdown-link"><span class="link-name-collapse">User Manager</span></a>
                    </li>
                    <li>
                        <a href="./edit-akun.html" id="edit-akun" class="dropdown-link">
                            <i class='bx bxs-user'></i>
                            <span class="dropdown-name">Edit Akun</span>
                        </a>
                    </li>
                    <li>
                        <a href="./ubah-password.html" id="ubah-password" class="dropdown-link">
                            <i class='bx bxs-key'></i>
                            <span class="dropdown-name">Ubah Password</span>
                        </a>
                    </li>
                    @can('admin')
                        <li>
                            <a href="./user.html" id="user-account" class="dropdown-link">
                                <i class='bx bxs-user-account'></i>
                                <span class="dropdown-name">User Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="./user-role.html" id="user-role" class="dropdown-link">
                                <i class='bx bxs-user-detail'></i>
                                <span class="dropdown-name">User Role</span>
                            </a>
                        </li>
                        <li>
                            <a href="./user-level.html" id="user-level" class="dropdown-link">
                                <i class='bx bxs-user-badge'></i>
                                <span class="dropdown-name">User Level</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        </ul>
    </div>
    <div class="bottom-side">
        <ul class="nav-menu">
            <li class="nav-list">
                <a href="/logout" class="nav-link user-link">
                    <img src="{{ url('assets/img') }}/no-profile-user.png" alt="" class="user-img">
                    <span class="link-name">
                        @if (isset(Auth::user()->name))
                            {{ Auth::user()->name }}
                        @else
                            {{ Str::limit(session()->get('name'), 12) }}
                        @endif
                    </span>
                    <i class='bx bx-log-out' style="margin-left: 20px; font-size: 30px;"></i>
                </a>
                <ul class="dropdown-blank">
                    <li>
                        <a href="/logout" class="dropdown-link user-dropdown">
                            <span class="link-name-collapse" style="white-space: nowrap;">
                                @if (isset(Auth::user()->name))
                                    {{ Auth::user()->name }}
                                @else
                                    {{ Str::limit(session()->get('name'), 12) }}
                                @endif
                            </span>
                            <i class='bx bx-log-out'></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
