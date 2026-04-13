// =====================
// Cursor Hover Animation
// =====================
const animate_card_mouseover_effect = (e) => {
    const { currentTarget: target } = e;
    const rect = target.getBoundingClientRect();
    target.style.setProperty("--mouse-x", `${e.clientX - rect.left}px`);
    target.style.setProperty("--mouse-y", `${e.clientY - rect.top}px`);
};

document.addEventListener("DOMContentLoaded", () => {
    // =====================
    // Hover Cards
    // =====================
    const cards = document.querySelectorAll(".hoverAnimatedContainer");

    if (cards.length) {
        let activeCard = null;

        cards.forEach((card) => {
            const rect = card.getBoundingClientRect();
            card.style.setProperty("--mouse-x", `${rect.width / 2}px`);
            card.style.setProperty("--mouse-y", `${rect.height / 2}px`);

            card.addEventListener("pointerenter", (e) => {
                activeCard = card;
                card.classList.add("cursor-active");
                animate_card_mouseover_effect(e);
            });

            card.addEventListener("pointerleave", () => {
                card.classList.remove("cursor-active");
                card.style.setProperty("--mouse-x", `-9999px`);
                card.style.setProperty("--mouse-y", `-9999px`);
                activeCard = null;
            });
        });

        document.addEventListener(
            "pointermove",
            (e) => {
                if (!activeCard) return;
                const rect = activeCard.getBoundingClientRect();
                activeCard.style.setProperty(
                    "--mouse-x",
                    `${e.clientX - rect.left}px`,
                );
                activeCard.style.setProperty(
                    "--mouse-y",
                    `${e.clientY - rect.top}px`,
                );
            },
            { passive: true },
        );
    }

    // =====================
    // Sidebar Toggle
    // =====================
    const sidebar = document.querySelector("[data-sidebar]");
    const sidebarBtn = document.querySelector("[data-sidebar-btn]");

    if (sidebar && sidebarBtn) {
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("active");
        });
    }

    // =====================
    // Testimonials Modal
    // =====================
    const items = document.querySelectorAll("[data-words_by_them-item]");
    const modal = document.querySelector("[data-model-container]");
    const modalClose = document.querySelector("[data-model-close-btn]");
    const overlay = document.querySelector("[data-overlay]");

    const modalImg = document.querySelector("[data-model-img]");
    const modalTitle = document.querySelector("[data-model-title]");
    const modalDate = document.querySelector("[data-model-date]");
    const modalText = document.querySelector("[data-model-text]");

    const toggleModal = () => {
        if (modal && overlay) {
            modal.classList.toggle("active");
            overlay.classList.toggle("active");
        }
    };

    if (items.length) {
        items.forEach((item) => {
            item.addEventListener("click", () => {
                if (!modalImg) return;

                modalImg.src = item.querySelector(
                    "[data-words_by_them-avatar]",
                ).src;
                modalTitle.innerHTML = item.querySelector(
                    "[data-words_by_them-title]",
                ).innerHTML;
                modalText.innerHTML = item.querySelector(
                    "[data-words_by_them-text]",
                ).innerHTML;

                const rawDate = item.getAttribute("data-date");

                if (rawDate && rawDate !== "N/A") {
                    const formatted = new Date(rawDate).toLocaleDateString(
                        "en-US",
                        {
                            day: "2-digit",
                            month: "long",
                            year: "numeric",
                        },
                    );
                    modalDate.innerHTML = formatted;
                } else {
                    modalDate.innerHTML = "Date not available";
                }

                toggleModal();
            });
        });
    }

    if (modalClose) modalClose.addEventListener("click", toggleModal);
    if (overlay) overlay.addEventListener("click", toggleModal);

    // =====================
    // Filter / Select
    // =====================
    const select = document.querySelector("[data-select]");
    const selectItems = document.querySelectorAll("[data-select-item]");
    const selectValue = document.querySelector("[data-selecct-value]");
    const filterItems = document.querySelectorAll("[data-filter-item]");
    const filterBtns = document.querySelectorAll("[data-filter-btn]");

    const filterFunc = (value) => {
        filterItems.forEach((item) => {
            item.classList.toggle(
                "active",
                value === "all" || item.dataset.category === value,
            );
        });
    };

    if (select) {
        select.addEventListener("click", () => {
            select.classList.toggle("active");
        });
    }

    selectItems.forEach((item) => {
        item.addEventListener("click", () => {
            const value = item.innerText.toLowerCase();
            if (selectValue) selectValue.innerText = item.innerText;
            if (select) select.classList.remove("active");
            filterFunc(value);
        });
    });

    let lastBtn = filterBtns.length ? filterBtns[0] : null;

    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            const value = btn.innerText.toLowerCase();
            if (selectValue) selectValue.innerText = btn.innerText;

            filterFunc(value);

            if (lastBtn) lastBtn.classList.remove("active");
            btn.classList.add("active");
            lastBtn = btn;
        });
    });

    // =====================
    // Contact Form
    // =====================
    const form = document.querySelector("#contact-form");
    const inputs = document.querySelectorAll("[data-form-input]");
    const formBtn = document.querySelector("#form-btn");

    if (form && formBtn) {
        inputs.forEach((input) => {
            input.addEventListener("input", () => {
                form.checkValidity()
                    ? formBtn.removeAttribute("disabled")
                    : formBtn.setAttribute("disabled", "");
            });
        });
    }
});
