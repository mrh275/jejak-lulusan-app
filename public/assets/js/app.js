

// Toggle Menu
document.getElementById("toggleMenu").addEventListener("click", function() {
  document.getElementById("menu").classList.toggle("-left-full");
  document.getElementById("menu").classList.toggle("left-0");

  let toggleIcon = document.getElementById("toggleMenu").children;
  toggleIcon[0].classList.toggle("change-1");
  toggleIcon[1].classList.toggle("change-2");
  toggleIcon[2].classList.toggle("change-3");

})

// Datatables
$(document).ready(function() {
  $('#daftar-lulusan').DataTable({
    "autoWidth": false,
    "scrollX": true,
  });
} );