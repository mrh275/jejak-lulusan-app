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

  // Dropdown-right hover on mobile view
  $('.sidebar.collapse li.dropdown').hover( function() {
      $(this).find('.dropdown-menu').toggleClass('showMenu');
  })
  
  // Notification dropdown toggle
  $('.btn-notif').on('click', function() {
      $(this).parent().find('.nav-dropdown').toggleClass('showNavDropdown')
  })
  
  // User dropdown toggle
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
