<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Jejak Lulusan SMAN 1 Rawamerta</title>

    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/page.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    @if ($title == 'Daftar Lulusan')
        @include('component.datatable')
    @endif
</head>

<body class="bg-gray-200 overflow-auto">
    @include('component.navbar')

    <div class="main-container">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="footer-nav">
            <div class="footer-start">
                <div class="footer-brand flex justify-start">
                    <img src="/assets/img/logo.png" alt="Logo SMAN 1 Rawamerta" class="logo-footer">
                    <h2 class="brand-footer">SMAN 1 Rawamerta</h2>
                </div>
                <div class="footer-address mt-4">
                    <span class="font-semibold address-title">
                        Alamat : <br>
                    </span>
                    <span class="address">
                        Jl. Garunggung - Panyingkiran<br>
                        Kec. Rawamerta Kab. Karawang<br>
                        Prov. Jawa Barat
                    </span>
                    <div class="contact-info block mt-3">
                        <span class="address"><i class="fa fa-globe"></i> <a href="https://sman1rawamerta.sch.id" class="backlink">https://sman1rawamerta.sch.id</a></span><br>
                        <span class="address"><i class="fa fa-envelope"></i> sman1rwt@gmail.com</span><br>
                        <span class="address"><i class="fa fa-phone"></i> 081122334455</span>
                    </div>
                </div>
            </div>
            <hr class="separator-footer">
            <div class="footer-middle">
                <div class="partner">
                    <h2 class="partner-title">Link Terkait</h2>
                    <ul class="list-disc ml-5">
                        <li class="partner-list"><a href="https://sman1rawamerta.sch.id" class="backlink" target="_blank">Web Sekolah</a></li>
                        <li class="partner-list"><a href="https://vervalponsel.sman1rawamerta.sch.id" class="backlink" target="_blank">Verval Ponsel</a></li>
                        <li class="partner-list"><a href="https://ptk.datadik.kemdikbud.go.id" class="backlink">PTK Datadik</a></li>
                        <li class="partner-list"><a href="https://ppdb.disdik.jabarprov.go.id" class="backlink">PPDB Jawa Barat</a></li>
                        <li class="partner-list"><a href="https://gtk.belajar.kemdikbud.go.id" class="backlink">Portal GTK</a></li>
                    </ul>
                </div>
            </div>
            <hr class="separator-footer">
            <div class="footer-end">
                <h2 class="langganan">Berlangganan</h2>

                <!-- Langganan Form -->
                <form action="" class="langganan-form">
                    <input type="email" class="langganan-input" placeholder="namaanda@email.com">
                    <div class="button-form-wrapper">
                        <button class="btn btn-danger">Langganan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <span class="copyright">
                Copyright 2021 &copy; SMAN 1 Rawamerta. All Right Reserved.
            </span>

            <span class="creator">
                Made with <i class="fa fa-heart" aria-hidden="true"></i> by Muhamad Ramdani Hidayatullah
            </span>
        </div>
    </footer>

    <script src="/assets/js/app.js"></script>
</body>

</html>
