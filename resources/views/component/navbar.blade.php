<nav class="navbar">
    <div class="brand-container">
        <a href="/" class="img-brand-link">
            <img src="/assets/img/logo.png" alt="Logo" class="img-brand">
        </a>
        <a href="/" class="brand-link">
            SMAN 1 RAWAMERTA
        </a>
    </div>
    <div class="toggle-menu">
        <button class="cursor-pointer hbButton" id="toggleMenu">
            <div class="hb-menu bg-gray-400"></div>
            <div class="hb-menu bg-gray-400"></div>
            <div class="hb-menu bg-gray-400"></div>
        </button>
    </div>
    <div class="menu-container collapse -left-full" id="menu">
        <ul class="nav-menu">
            <li class="nav-list">
                <a href="/" class="nav-link">Beranda</a>
            </li>
            <li class="nav-list">
                <a href="/daftar-lulusan" class="nav-link">Daftar Lulusan</a>
            </li>

            @if (session()->has('nisn'))
                <li class="nav-list dropdown">
                    <a href="javascript:void(0)" class="nav-link"><span class="nav-link" style="color: #c7c7c7">({{ session()->get('name') }})</span></a>
                    <ul class="dropdown-menu hide">
                        <li class="drop-item">
                            <a href="/alumni" class="nav-link">Dashboard</a>
                        </li>
                        <li class="drop-item">
                            <a href="/logout" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </li>
            @else
                @auth
                    <li class="nav-list dropdown">
                        <a href="javascript:void(0)" class="nav-link"><span class="nav-link" style="color: #c7c7c7">({{ auth()->user()->name }})</span></a>
                        <ul class="dropdown-menu hide">
                            <li class="drop-item">
                                <a href="/admin" class="nav-link">Dashboard</a>
                            </li>
                            <li class="drop-item">
                                <a href="/logout" class="nav-link">Logout</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-list dropdown">
                        <a href="javascript:void(0)" class="nav-link">Login</a>
                        <ul class="dropdown-menu hide">
                            <li class="drop-item">
                                <a href="/login/alumni" class="nav-link">Alumni</a>
                            </li>
                            <li class="drop-item">
                                <a href="/login/admin" class="nav-link">Admin</a>
                            </li>
                        </ul>
                    </li>
                @endauth
            @endif
        </ul>
    </div>
</nav>
