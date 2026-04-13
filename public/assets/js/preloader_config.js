window.addEventListener("load", function () {
    const preloader = document.querySelector(".preloader");
    if (preloader) {
        preloader.style.display = "none";
        document.body.style.overflow = "auto";
    }
});

document.addEventListener("DOMContentLoaded", () => {
    document.body.style.overflow = "hidden";
});
