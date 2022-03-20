// Toggle Menu
document.getElementById("toggleMenu").addEventListener("click", function () {
    document.getElementById("menu").classList.toggle("-left-full");
    document.getElementById("menu").classList.toggle("left-0");

    let toggleIcon = document.getElementById("toggleMenu").children;
    toggleIcon[0].classList.toggle("change-1");
    toggleIcon[1].classList.toggle("change-2");
    toggleIcon[2].classList.toggle("change-3");
});

document.querySelector(".dropdown").addEventListener("click", function () {
    document.querySelector(".dropdown-menu").classList.toggle("hide");
    document.querySelector(".dropdown-menu").classList.toggle("show");
});

// Datatables
$(document).ready(function () {
    let dataLulusan = $("#daftar-lulusan").DataTable({
        autoWidth: true,
        scrollX: true,
        pagingType: "full_numbers",
    });
});
