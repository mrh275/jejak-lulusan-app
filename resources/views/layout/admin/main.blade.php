<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Admin Semesta</title>

    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/admin/css/admin.css">
    <link rel="stylesheet" href="/assets/admin/css/page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="/dist/css/all.min.css"> -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Javascript -->
    <script src="/assets/admin/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body class="body-bg">
    <div class="fixed" style="display: none;"></div>

    <div class="main-wrapper">
        @include('component.sidebar')

        <div class="main-container">
            @include('component.nav-admin')

            @yield('content')

            @include('component.footer-admin')
        </div>
    </div>

    <!-- Javascript -->
    <!-- Enable active class base on window size -->
    <script>
        if (screen.width < 768) {
            $("#{{ $activeMenu }}").addClass('active-open')
        } else {
            $("#{{ $activeMenu }}").addClass('active-open')
            @if ($activeSubMenu)
                $("#{{ $activeSubMenu }}").addClass('active-open')
                $('#{{ $activeMenu }}').next().toggleClass('hide')
                $('#{{ $activeMenu }}').next().toggleClass('show')
            @endif
        }
    </script>
    <script src="/assets/admin/js/admin.js"></script>
</body>

</html>
