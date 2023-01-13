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

                @if (!isset(Auth::user()->name))
                    <a href="{{ url('alumni') }}" id="dashboard" class="nav-link">
                    @else
                        <a href="{{ url('admin') }}" id="dashboard" class="nav-link">
                @endif
                <i class='bx bx-grid-alt'></i>
                <span class="link-name">Dashboard</span>
                </a>
                <ul class="dropdown-blank">
                    @if (!isset(Auth::user()->name))
                        <li>
                            <a href="{{ url('alumni') }}" class="dropdown-link"><span class="link-name-collapse">Dashboard</span></a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('admin') }}" class="dropdown-link"><span class="link-name-collapse">Dashboard</span></a>
                        </li>
                    @endif
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
                    @if (!isset(Auth::user()->name))
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
                    @endif

                    @can('admin')
                        <li>
                            <a href="{{ url('admin') }}/datatable-biodata" id="tabel-biodata" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Biodata</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin') }}/datatable-orangtua" id="tabel-orangtua" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Orang Tua</span>
                            </a>
                        </li>
                    @elsecan('operator')
                        <li>
                            <a href="{{ url('admin') }}/datatable-biodata" id="tabel-biodata" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Biodata</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin') }}/datatable-orangtua" id="tabel-orangtua" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Orang Tua</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <li class="nav-list dropdown">
                <a class="nav-link" id="kelulusan" href="javascript:void(0)" style="cursor: pointer;">
                    <i class='fa fa-graduation-cap'></i>
                    <span class="link-name" style="margin-left: 28px">Data Kelulusan</span>
                </a>
                <ul class="dropdown-menu hide">
                    <li>
                        <a href="javascript:void(0)" class="dropdown-link"><span class="link-name-collapse">Data Kelulusan</span></a>
                    </li>
                    @if (isset($biodata))
                        @if (!isset(Auth::user()->name))
                            @if ($biodata->status_lulusan == 1)
                                <li>
                                    <a href="{{ isset(Auth::user()->name) ? url('admin') : url('alumni') }}/data-kuliah" id="data-kuliah" class="dropdown-link">
                                        <i class='bx bxs-user-detail'></i>
                                        <span class="dropdown-name">Data Kuliah</span>
                                    </a>
                                </li>
                            @elseif ($biodata->status_lulusan == 2)
                                <li>
                                    <a href="{{ isset(Auth::user()->name) ? url('admin') : url('alumni') }}/data-pekerjaan" id="data-pekerjaan" class="dropdown-link">
                                        <i class='fa fa-users'></i>
                                        <span class="dropdown-name">Data Pekerjaan</span>
                                    </a>
                                </li>
                            @elseif ($biodata->status_lulusan == 3)
                                <li>
                                    <a href="{{ isset(Auth::user()->name) ? url('admin') : url('alumni') }}/data-kuliah" id="data-kuliah" class="dropdown-link">
                                        <i class='bx bxs-user-detail'></i>
                                        <span class="dropdown-name">Data Kuliah</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ isset(Auth::user()->name) ? url('admin') : url('alumni') }}/data-pekerjaan" id="data-pekerjaan" class="dropdown-link">
                                        <i class='fa fa-users'></i>
                                        <span class="dropdown-name">Data Pekerjaan</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endif


                    @can('admin')
                        <li>
                            <a href="{{ url('admin') }}/datatable-kuliah" id="tabel-kuliah" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Kuliah</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin') }}/datatable-pekerjaan" id="tabel-pekerjaan" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Pekerjaan</span>
                            </a>
                        </li>
                    @elsecan('operator')
                        <li>
                            <a href="{{ url('admin') }}/datatable-kuliah" id="tabel-kuliah" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Kuliah</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin') }}/datatable-pekerjaan" id="tabel-pekerjaan" class="dropdown-link">
                                <i class='bx bxs-data'></i>
                                <span class="dropdown-name">Datatable Pekerjaan</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            @if (isset(Auth::user()->name))
                <li class="nav-list dropdown">
                    <a class="nav-link" id="export" href="javascript:void(0)" style="cursor: pointer;">
                        <i class='fa fa-download'></i>
                        <span class="link-name" style="margin-left: 36px">Export/Import</span>
                    </a>
                    <ul class="dropdown-menu hide">
                        <li>
                            <a href="javascript:void(0)" class="dropdown-link"><span class="link-name-collapse">Export</span></a>
                        </li>

                        @can('admin')
                            <li>
                                <a href="{{ url('/export-all') }}" id="export-all" class="dropdown-link">
                                    <i class='bx bx-import'></i>
                                    <span class="dropdown-name">Export All</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin') }}/export-angkatan" id="export-angkatan" class="dropdown-link">
                                    <i class='bx bx-filter-alt'></i>
                                    <span class="dropdown-name">Export Angkatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin') }}/import-lulusan" id="import-lulusan" class="dropdown-link">
                                    <i class='bx bx-export'></i>
                                    <span class="dropdown-name">Import Lulusan</span>
                                </a>
                            </li>
                        @elsecan('operator')
                            <li>
                                <a href="{{ url('/export-all') }}" id="export-all" class="dropdown-link">
                                    <i class='bx bxs-file-archive'></i>
                                    <span class="dropdown-name">Export All</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin') }}/export-angkatan" id="export-angkatan" class="dropdown-link">
                                    <i class='bx bx-filter-alt'></i>
                                    <span class="dropdown-name">Export Angkatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin') }}/import-lulusan" id="import-lulusan" class="dropdown-link">
                                    <i class='bx bx-export'></i>
                                    <span class="dropdown-name">Import Lulusan</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            @can('admin')
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
                            <a href="{{ url('admin/user-account') }}" id="user-account" class="dropdown-link">
                                <i class='bx bxs-user'></i>
                                <span class="dropdown-name">Edit Akun</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/user-role') }}" id="user-role" class="dropdown-link">
                                <i class='bx bxs-user-detail'></i>
                                <span class="dropdown-name">User Role</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
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
                            {{ Str::limit(session()->get('name'), 10, '...') }}
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
                                    {{ Str::limit(session()->get('name'), 12), '...' }}
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
