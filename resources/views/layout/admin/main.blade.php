<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Jejak Lulusan</title>

    <!--Favicon-->
    <link rel="icon" type="image/png" href="{{ url('assets/img/favicon.png') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('assets/admin/css') }}/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ url('assets/admin/css') }}/page.css">
    <link rel="stylesheet" href="{{ url('assets/admin/css') }}/components.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.min.css">

    <!-- Javascript -->
    <script src="{{ url('assets/admin/js') }}/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    @if (isset(Auth::user()->name))
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endif

    @if (request()->segment(2) === 'biodata' || 'data-orangtua')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
        <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker.min.js"></script>
    @else
        {{ '' }}
    @endif


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
    <script src="{{ url('assets/admin/js') }}/admin.js"></script>
    <script>
        // Enable active class base on window size
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

        // Datepicker Input Form
        $("input#input-tanggalLahir").on('mousedown', function() {
            const datepicker = new Datepicker(this, {
                format: {
                    toValue(date) {
                        const fullYearDate = date.replace(/\/(\d\d)$/, '/20$1');
                        return Datepicker.parseDate(fullYearDate, 'dd/mm/yyyy')
                    },
                    toDisplay(date) {
                        return Datepicker.formatDate(date, 'dd/mm/yyyy');
                    },
                },
                autohide: true,
            });
        })

        // List Post Datatable
        $(document).ready(function() {
            $('.table-biodata').DataTable({
                "lengthMenu": [
                    [10, 15, 25, 50, 100, -1],
                    [10, 15, 25, 50, 100, "All"]
                ],
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                        "previous": "<i class='bx bx-chevron-left'></i>",
                        "next": "<i class='bx bx-chevron-right' ></i>"
                    }
                },
                responsive: true,
                scrollX: true,
                autoWidth: false,
            });
        });

        // Selecting table row
        $('.table-biodata').on('click', 'tr', function() {
            $('tr').not(this).removeClass('selected');
            $(this).toggleClass('selected')
        });
        $('.table-biodata').on('click', 'button', function(e) {
            e.preventDefault();
        });

        // Close alert event
        let closeAlert = document.querySelector("i.close");
        closeAlert.addEventListener("click", function() {
            closeAlert.parentElement.style.display = "none";
        });
    </script>
    @stack('scripts')
</body>

</html>
