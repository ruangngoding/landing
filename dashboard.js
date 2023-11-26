document.addEventListener("DOMContentLoaded", function () {
    var arrowDownContainer = document.getElementById("arrow-down-container");
    var dropdownMenu = document.getElementById("dropdown-menu");
    var profileImage = document.getElementById("photo-profil");

    arrowDownContainer.addEventListener("click", function (event) {
        positionDropdown();
        dropdownMenu.classList.toggle("show");
        event.stopPropagation();
    });

    window.addEventListener("click", function () {
        if (dropdownMenu.classList.contains("show")) {
            dropdownMenu.classList.remove("show");
        }
    });

    window.addEventListener("resize", function () {
        if (dropdownMenu.classList.contains("show")) {
            positionDropdown();
        }
    });

    function positionDropdown() {
        var arrowRect = arrowDownContainer.getBoundingClientRect();
        var dropdownWidth = dropdownMenu.offsetWidth;
        var rightPosition = window.innerWidth - arrowRect.right;

        // Check if there is enough space on the left
        if (arrowRect.right >= dropdownWidth) {
            dropdownMenu.style.left = "auto";
            dropdownMenu.style.right = rightPosition + "px";
        } else {
            // If not, align to the right
            dropdownMenu.style.left = arrowRect.left + "px";
            dropdownMenu.style.right = "auto";
        }

        dropdownMenu.style.top = arrowRect.bottom + "px";
    }
});
