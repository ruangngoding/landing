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