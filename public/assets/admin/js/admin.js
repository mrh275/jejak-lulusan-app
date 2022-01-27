// Check window size
if(screen.width < 768) {
  $('.sidebar').removeClass('expand');
  $('.sidebar').removeClass('overflow-x-hidden');
  $('.sidebar').removeClass('overflow-y-auto');
  $('.sidebar').addClass('collapse');
  $('.main-container').addClass('expand');
  $('.bottom-side').addClass('collapse');
}

$('.toggle-sidebar').on('click', () => {
    $('.sidebar').toggleClass('collapse');
    $('.sidebar').toggleClass('expand');
    $('.sidebar').toggleClass('overflow-x-hidden');
    $('.sidebar').toggleClass('overflow-y-auto');
    $('.bottom-side').toggleClass('collapse');
    $('.main-container').toggleClass('expand');
})

// Navbar sticky on scroll
let lastScrollTop = 0;
$(window).scroll(function(event){
  let st = $(this).scrollTop();
  if(st > lastScrollTop) {
    $('.navbar').addClass('fixed');
  } else {
    $('.navbar').removeClass('fixed');
  }
});

// Dropdown toggle
  $('.sidebar.expand ul.nav-menu').on('click', '.dropdown', function() {
      $(this).find('.dropdown-menu').toggleClass('show', 300);
      $(this).find('.dropdown-menu').toggleClass('hide', 300);
      $(this).find('.dropdown-menu').prev().toggleClass('active');
})

// Prevent dropdown-menu close when click inside
$('.dropdown-menu').on('click', function(e) {
  e.stopPropagation();
})


// $('.sidebar.expand ul.nav-menu').on('click', '.dropdown', function(e) {
//   e.stopPropagation();
// })


$('.sidebar.collapse li.dropdown').hover( function() {
    $(this).find('.dropdown-menu').toggleClass('showMenu');
})

$('.btn-notif').on('click', function() {
    $(this).parent().find('.nav-dropdown').toggleClass('showNavDropdown')
})

$('.btn-user').on('click', function() {
    $(this).parent().find('.nav-dropdown').toggleClass('showNavDropdown')
})

// Popular post vertical carousel
$("div.popular-post-body").slick({
    vertical: true,
    accessibility: false,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
  });

//   Visitor chart
const labels = [
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: 'Pengunjung',
      backgroundColor: '#0099ff',
      borderColor: '#0099ff',
      data: [70, 30, 54, 70, 120, 210, 463],
    }]
  };
  const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        plugin: {
          title: {
            display: true,
            text: "Data pengunjung bulanan"
          },
        },
    }
  };
  const myChart = new Chart(
    document.getElementById('visitor-chart'),
    config
  );

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
    });
} );

// Selecting table row
$('.table-biodata').on( 'click', 'tr', function () {
  $('tr').not(this).removeClass('selected');
  $(this).toggleClass('selected')
} );
$('.table-biodata').on( 'click', 'button', function (e) {
  e.preventDefault();
});

// Datepicker Input Form
const inputDate = document.querySelector('input[name="tanggalLahir"]');
const datepicker = new Datepicker(inputDate, {
  format: {
    toValue(date) {
      const fullYearDate = date.replace(/\/(\d\d)$/, '/20$1');
      return Datepicker.parseDate(fullYearDate, 'dd/mm/yyyy')
    },
    toDisplay(date) {
      return Datepicker.formatDate(date , 'dd/mm/yyyy');
    },
  },
  autohide: true,
});