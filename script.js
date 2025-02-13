document.addEventListener("DOMContentLoaded", function() {
    if (document.body.classList.contains("pmpro-member")) {
        document.querySelectorAll(".member-only-menu").forEach(el => {
            el.style.display = "block";
        });
    } else {
        document.querySelectorAll(".member-only-menu").forEach(el => {
            el.style.display = "none";
        });
    }
});
