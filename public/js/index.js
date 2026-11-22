/* ============================================
   IB GAMING - INDEX JAVASCRIPT
============================================ */

document.addEventListener("DOMContentLoaded", function () {


    /* ========================================
       CEK LOGIN
    ======================================== */

    function isLoggedIn() {

        const userData =
            localStorage.getItem("ibGamingUser");

        return userData !== null;

    }


    /* ========================================
       BOOKING PLAYSTATION
       WAJIB LOGIN
    ======================================== */

    const bookingLinks =
        document.querySelectorAll(
            'a[href="/user/booking/booking-form"]'
        );


    bookingLinks.forEach(function (bookingLink) {

        bookingLink.addEventListener(
            "click",
            function (event) {

                event.preventDefault();


                if (isLoggedIn()) {

                    // Sudah login
                    window.location.href =
                        "/user/booking/booking-form";

                } else {

                    // Belum login
                    window.location.href =
                        "/auth/login";

                }

            }
        );

    });


    /* ========================================
       PESAN F&B
       TIDAK WAJIB LOGIN
    ======================================== */

    const fnbLinks =
        document.querySelectorAll(
            'a[href="/user/fnb/pesan-fnb"]'
        );


    fnbLinks.forEach(function (fnbLink) {

        fnbLink.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                // Login atau tidak tetap bisa masuk F&B
                window.location.href =
                    "/user/fnb/pesan-fnb";

            }
        );

    });


});
