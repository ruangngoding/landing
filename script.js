document.addEventListener("DOMContentLoaded", function () {
    const profiles = document.querySelectorAll(".card");
    const arrowLeft = document.getElementById("arrow-left");
    const arrowRight = document.getElementById("arrow-right");
    let currentProfileIndex = 0;
    
    function showProfile(index) {
        profiles.forEach((profile, i) => {
            if (i === index) {
                profile.style.display = "block";
            } else {
                profile.style.display = "none";
            }
        });
    }
    
    arrowLeft.addEventListener("click", function () {
        currentProfileIndex = (currentProfileIndex - 1 + profiles.length) % profiles.length;
        showProfile(currentProfileIndex);
    });
    
    arrowRight.addEventListener("click", function () {
        currentProfileIndex = (currentProfileIndex + 1) % profiles.length;
        showProfile(currentProfileIndex);
    });
    
    // Menampilkan profil pertama saat halaman dimuat
    showProfile(currentProfileIndex);
});

// Update the existing JavaScript code

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const navList = document.querySelector(".nav-list");

    hamburgerMenu.addEventListener("click", function () {
        navList.classList.toggle("show");
    });

    // Close the navigation if a menu item is clicked
    document.querySelectorAll(".nav-list a").forEach(function (item) {
        item.addEventListener("click", function () {
            navList.classList.remove("show");
        });
    });

    // Close the navigation if "Masuk" or "Daftar" button is clicked
    document.querySelectorAll(".mobile-login, .mobile-register").forEach(function (item) {
        item.addEventListener("click", function () {
            navList.classList.remove("show");
        });
    });
});