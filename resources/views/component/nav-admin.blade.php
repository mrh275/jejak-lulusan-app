<div class="navbar">
    <button class="toggle-sidebar">
        <i class='bx bx-menu'></i>
    </button>
    <div class="nav-right">
        <div class="notification">
            <button class="btn-notif">
                <i class='bx bxs-bell'></i>
                @if (isset($notif['notifBio']) || isset($notif['notifOrangTua']) || isset($notif['notifKuliah']) || isset($notif['notifPekerjaan']))
                    <span class="badges" data-badge="*"></span>
                @endif
            </button>
            <ul class="nav-dropdown">
                @if (isset($notif))
                    @if (!isset($notif['notifBio']))
                        <li class="nav-drop-list">
                            <a href="/alumni/biodata" class="nav-drop-link">
                                <i class='bx bxs-info-circle' style="color: #bf1f1f"></i>
                                <span class="nav-drop-name">Biodata belum lengkap</span>
                            </a>
                        </li>
                        <hr class="nav-drop-separator">
                    @endif
                    @if (!isset($notif['notifOrangTua']))
                        <li class="nav-drop-list">
                            <a href="/alumni/data-orangtua" class="nav-drop-link">
                                <i class='bx bxs-info-circle' style="color: #bf1f1f"></i>
                                <span class="nav-drop-name">Data Orang Tua belum lengkap</span>
                            </a>
                        </li>
                        <hr class="nav-drop-separator">
                    @endif
                    @if ($biodata->status_lulusan == 1)
                        @if (!isset($notif['notifKuliah']))
                            <li class="nav-drop-list">
                                <a href="/alumni/data-kuliah" class="nav-drop-link">
                                    <i class='bx bxs-info-circle' style="color: #bf1f1f"></i>
                                    <span class="nav-drop-name">Data Kuliah belum lengkap</span>
                                </a>
                            </li>
                            <hr class="nav-drop-separator">
                        @endif
                    @endif
                    @if ($biodata->status_lulusan == 2)
                        @if (!isset($notif['notifPekerjaan']))
                            <li class="nav-drop-list">
                                <a href="/alumni/data-pekerjaan" class="nav-drop-link">
                                    <i class='bx bxs-info-circle' style="color: #bf1f1f"></i>
                                    <span class="nav-drop-name">Data Pekerjaan belum lengkap</span>
                                </a>
                            </li>
                            <hr class="nav-drop-separator">
                        @endif
                    @endif
                    @if ($biodata->status_lulusan == 3)
                        @if (!isset($notif['notifKuliah']))
                            <li class="nav-drop-list">
                                <a href="/alumni/data-kuliah" class="nav-drop-link">
                                    <i class='bx bxs-info-circle' style="color: #bf1f1f"></i>
                                    <span class="nav-drop-name">Data Kuliah belum lengkap</span>
                                </a>
                            </li>
                            <hr class="nav-drop-separator">
                        @endif
                        @if (!isset($notif['notifPekerjaan']))
                            <li class="nav-drop-list">
                                <a href="/alumni/data-pekerjaan" class="nav-drop-link">
                                    <i class='bx bxs-info-circle' style="color: #bf1f1f"></i>
                                    <span class="nav-drop-name">Data Pekerjaan belum lengkap</span>
                                </a>
                            </li>
                            <hr class="nav-drop-separator">
                        @endif
                    @endif
                @else
                    <a href="javascript:void(0)" class="nav-drop-link">
                        <i class='bx bx-info-circle'></i>
                        <span class="nav-drop-name">Tidak ada notifikasi</span>
                    </a>
                @endif
            </ul>
        </div>
        <div class="nav-user">
            <button class="btn-user">
                <i class='bx bxs-user'></i>
            </button>
            <ul class="nav-dropdown">
                <li class="nav-drop-list nav-drop-username">
                    <span class="nav-drop-name">
                        @if (isset(Auth::user()->name))
                            {{ Auth::user()->name }}
                        @else
                            {{ session()->get('name') }}
                        @endif
                    </span>
                </li>
                <li class="nav-drop-list">
                    <a href="/" class="nav-drop-link">
                        <i class='bx bx-home'></i>
                        <span class="nav-drop-name">Halaman Portal</span>
                    </a>
                </li>
                <hr class="nav-drop-separator">
                <li class="nav-drop-list">
                    <a href="/logout" class="nav-drop-link">
                        <i class='bx bx-log-out'></i>
                        <span class="nav-drop-name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
