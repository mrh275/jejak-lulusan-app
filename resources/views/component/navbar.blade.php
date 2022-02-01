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
            <li class="nav-list">
                <a href="/pengumuman-kelulusan" class="nav-link">Pengumuman</a>
            </li>
            @auth
                <li class="nav-list">
                    <span class="nav-link" style="color: #c7c7c7">({{ auth()->user()->name }})</span>
                </li>
                <li class="nav-list">
                    <a href="/alumni" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-list">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            @else
                <li class="nav-list">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
