document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");

    form.addEventListener("submit", async function (event) {
        event.preventDefault();

        const button = document.getElementById("form-btn");
        const span = button.querySelector("span");
        const statusMessage = document.getElementById("form-status");

        if (button.disabled) return;

        span.innerHTML =
            "Sending... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        button.disabled = true;

        let formData = new FormData(this);

        try {
            let response = await fetch(form.action, {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector(
                        'input[name="_token"]',
                    ).value,
                    "Cache-Control": "no-cache",
                },
            });

            let result = await response.text();

            statusMessage.style.display = "block";
            statusMessage.innerHTML = result;

            this.reset();
        } catch (error) {
            statusMessage.style.display = "block";
            statusMessage.innerHTML = "<span>An Error Occurred.</span>";
        }

        span.textContent = "Send Message";
        button.disabled = false;
    });
});
