/* ============================================
   IB GAMING - GLOBAL JAVASCRIPT
============================================ */


/**
 * ============================================
 * HELPER
 * ============================================
 */

/**
 * Helper untuk mengambil element berdasarkan ID
 */
function getElement(id) {
    return document.getElementById(id);
}


/**
 * Helper untuk mengambil banyak element
 */
function getElements(selector) {
    return document.querySelectorAll(selector);
}


/**
 * Redirect ke halaman tertentu
 */
function goToPage(page) {
    window.location.href = page;
}


/**
 * Menyimpan data ke localStorage
 */
function saveToStorage(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
}


/**
 * Mengambil data dari localStorage
 */
function getFromStorage(key) {
    const data = localStorage.getItem(key);

    if (!data) {
        return null;
    }

    try {
        return JSON.parse(data);
    } catch (error) {
        return data;
    }
}


/**
 * Menghapus data dari localStorage
 */
function removeFromStorage(key) {
    localStorage.removeItem(key);
}


/**
 * Menampilkan pesan sederhana
 */
function showMessage(message) {
    alert(message);
}


/**
 * ============================================
 * CEK STATUS LOGIN
 * ============================================
 */

function isUserLoggedIn() {
    return getFromStorage("ibGamingUser") !== null;
}


/**
 * ============================================
 * PATH HELPER
 * ============================================
 */



/**
 * Mendapatkan path assets
 */
function getAssetPath(asset) {
    return "/assets/" + asset;
}


/**
 * Path ke login
 */
function getLoginPath() {
    return "/auth/login";
}


/**
 * Path ke booking
 */
function getBookingPath() {
    return "/user/booking/booking-form";
}


/**
 * ============================================
 * HEADER LOGIN / GUEST
 * ============================================
 */

function initializeHeader() {

    const authContainer =
        getElement("authActionButtons");

    if (!authContainer) {
        return;
    }

    if (isUserLoggedIn()) {
        renderLoggedInHeader(authContainer);
    } else {
        renderGuestHeader(authContainer);
    }
}


/**
 * ============================================
 * HEADER - GUEST
 * ============================================
 */

function renderGuestHeader(container) {

    container.innerHTML = `
        <a
            class="vector-wrapper"
            href="${getCartPath()}"
            aria-label="Keranjang pesanan">

            <img
                class="vector"
                src="${getAssetPath("Icon/Keranjang.svg")}"
                alt=""
                aria-hidden="true">

        </a>

        <a
            class="link-login-staff"
            href="${getLoginPath()}">

            <div class="group">

                <img
                    class="login-user-icon"
                    src="${getAssetPath("Icon/User.svg")}"
                    alt=""
                    aria-hidden="true">

                <span class="text-wrapper-2">
                    Masuk
                </span>

            </div>

        </a>
    `;
}


/**
 * ============================================
 * HEADER - LOGIN
 * ============================================
 */

function renderLoggedInHeader(container) {

    const user = getFromStorage("ibGamingUser") || {};

    const username = user.username || "User";
    const email = user.email || "";

    container.innerHTML = `
        <a
            class="vector-wrapper"
            href="${getCartPath()}"
            aria-label="Keranjang pesanan">

            <img
                class="vector"
                src="${getAssetPath("Icon/Keranjang.svg")}"
                alt=""
                aria-hidden="true">

        </a>

        <button type="button" class="vector-wrapper" data-open-user-notification aria-haspopup="dialog" aria-controls="userNotificationDialog"
            aria-label="Notifikasi">

            <img
                class="vector-2"
                src="${getAssetPath("Icon/Notif.svg")}"
                alt=""
                aria-hidden="true">

        </button>

        <div class="profile-menu">

            <button
                type="button"
                class="profile-button"
                id="profileButton"
                aria-expanded="false"
                aria-haspopup="true"
                aria-label="Buka menu profil">

                <img
                    class="profile-image"
                    src="${getAssetPath("Images/Elon.jpg")}"
                    alt="${username}">

                <span class="profile-name">
                    ${username}
                </span>

                <img
                    class="profile-arrow"
                    src="${getAssetPath("Icon/Arrow.svg")}"
                    alt=""
                    aria-hidden="true">

            </button>


            <div
                class="profile-dropdown"
                id="profileDropdown"
                role="menu">

                <div class="profile-dropdown-header">

                    <img
                        class="dropdown-profile-image"
                        src="${getAssetPath("Images/Elon.jpg")}"
                        alt="${username}">

                    <div class="dropdown-profile-info">

                        <span class="dropdown-profile-name">
                            ${username}
                        </span>

                        <span class="dropdown-profile-email">
                            ${user.username || ""}
                        </span>

                    </div>

                </div>


                <div class="dropdown-divider"></div>


                <a
                    href="${getProfilePath()}"
                    class="dropdown-item"
                    role="menuitem">

                    <span class="dropdown-item-icon">

                        <img
                            src="${getAssetPath("Icon/User-gold.svg")}"
                            alt="">

                    </span>

                    <span>Profile Saya</span>

                </a>


                <a
                    href="${getLogoutPath()}"
                    class="dropdown-item logout-button"
                    role="menuitem">

                    <span class="dropdown-item-icon">

                        <img
                            src="${getAssetPath("Icon/Logout.svg")}"
                            alt="">

                    </span>

                    <span>Logout</span>

                </a>

            </div>

        </div>
    `;

    initializeProfileDropdown();
    initializeLogout();
}


/**
 * ============================================
 * PROFILE DROPDOWN
 * ============================================
 */

function initializeProfileDropdown() {

    const profileButton =
        getElement("profileButton");

    const profileDropdown =
        getElement("profileDropdown");

    if (!profileButton || !profileDropdown) {
        return;
    }


    profileButton.addEventListener("click", function (event) {

        event.stopPropagation();

        const isOpen =
            profileButton.getAttribute("aria-expanded") === "true";

        profileButton.setAttribute(
            "aria-expanded",
            String(!isOpen)
        );

        profileDropdown.classList.toggle(
            "show",
            !isOpen
        );

    });


    document.addEventListener("click", function (event) {

        if (
            !profileDropdown.contains(event.target) &&
            !profileButton.contains(event.target)
        ) {

            profileButton.setAttribute(
                "aria-expanded",
                "false"
            );

            profileDropdown.classList.remove("show");

        }

    });
}


/**
 * ============================================
 * PATH - CART
 * ============================================
 */

function getCartPath() {
    return "/user/cart";
}




/**
 * ============================================
 * PATH - PROFILE
 * ============================================
 */

function getProfilePath() {
    return "/user/profile";
}


/**
 * ============================================
 * PATH - LOGOUT
 * ============================================
 */

function getLogoutPath() {
    return "/";
}


/**
 * ============================================
 * BOOKING PS - WAJIB LOGIN
 * ============================================
 */

function initializeBookingProtection() {

    const bookingLinks =
        document.querySelectorAll(
            'a[href*="/user/booking/booking-form"]'
        );

    bookingLinks.forEach(function (link) {

        link.addEventListener("click", function (event) {

            if (!isUserLoggedIn()) {

                event.preventDefault();

                goToPage(getLoginPath());
            }

        });

    });
}


/**
 * ============================================
 * DOM READY
 * ============================================
 */

document.addEventListener("DOMContentLoaded", function () {

    console.log("IB Gaming Global JS Loaded");

    // Header otomatis Guest / Login
    initializeHeader();

    // Booking wajib login
    initializeBookingProtection();

});
