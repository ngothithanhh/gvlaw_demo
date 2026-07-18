
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const closeMenu = document.querySelector(".close-menu");
    const mobileMenu = document.querySelector(".mobile-menu");
    const overlay = document.querySelector(".overlay");

    // console.log(document.querySelector(".menu-toggle"));
    // console.log(document.querySelector(".mobile-menu"));

    // Mở menu
    menuToggle.addEventListener("click", function () {
        mobileMenu.classList.add("active");
        overlay.classList.add("active");
        document.body.style.overflow = "hidden";
    });

    // Đóng menu
    function closeMobileMenu() {
        mobileMenu.classList.remove("active");
        overlay.classList.remove("active");
        document.body.style.overflow = "";
    }

    closeMenu.addEventListener("click", closeMobileMenu);
    overlay.addEventListener("click", closeMobileMenu);

    // Submenu
    const parents = document.querySelectorAll(
        ".mobile-nav .menu-item-has-children > a"
    );

    parents.forEach(function (item) {

        item.addEventListener("click", function (e) {

            e.preventDefault();

            const parent = this.parentElement;
            const submenu = this.nextElementSibling;

            parent.classList.toggle("active");

            if (submenu) {
                submenu.classList.toggle("open");
            }

        });

    });

    // Resize về desktop
    window.addEventListener("resize", function () {

        if (window.innerWidth > 992) {
            closeMobileMenu();
        }

    });

});