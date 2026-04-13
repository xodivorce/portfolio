// Function to show the notification with a fade-in effect
window.addEventListener("load", function () {
    if (window.innerWidth < 768) {
        const notification = document.getElementById("mobile-notification");
        notification.classList.add("show");
    }
});

// Function to close the notification with a fade-out effect
function closeNotification() {
    const notification = document.getElementById("mobile-notification");
    notification.classList.remove("show");
    setTimeout(function () {
        notification.style.display = "none";
    }, 3000);
}
