lucide.createIcons();

const scrollToTopBtn = document.getElementById("scrollToTopBtn");
window.onscroll = function () {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        scrollToTopBtn.style.opacity = "1";
        scrollToTopBtn.style.transform = "translateY(0)";
    } else {
        scrollToTopBtn.style.opacity = "0";
        scrollToTopBtn.style.transform = "translateY(1rem)";
    }
};
scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animated");
                observer.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.1 }
);
document.querySelectorAll(".animate-on-scroll").forEach((el) => {
    observer.observe(el);
});
const filterContainer = document.querySelector("#news-filter");
const newsItems = document.querySelectorAll(".news-item");
if (filterContainer) {
    filterContainer.addEventListener("click", (event) => {
        if (event.target.tagName === "BUTTON") {
            filterContainer.querySelector(".active").classList.remove("active");
            event.target.classList.add("active");
            const filter = event.target.dataset.filter;
            newsItems.forEach((item) => {
                if (filter === "semua" || item.dataset.category === filter) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        }
    });
}
function setupCarousel(carouselId) {
    const container = document.getElementById(
        `${carouselId}-carousel-container`
    );
    if (!container) return;
    const wrapper = document.getElementById(`${carouselId}-carousel-wrapper`);
    const prevBtn = document.getElementById(`prev-${carouselId}`);
    const nextBtn = document.getElementById(`next-${carouselId}`);
    let currentIndex = 0;
    let itemsPerView = window.innerWidth < 768 ? 1 : 3;
    const totalItems = container.children.length;
    let maxIndex = Math.max(0, totalItems - itemsPerView);
    function updateCarousel() {
        const itemWidth = wrapper.offsetWidth / itemsPerView;
        const offset = -currentIndex * itemWidth;
        container.style.transform = `translateX(${offset}px)`;
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;
    }
    nextBtn.addEventListener("click", () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });
    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });
    window.addEventListener("resize", () => {
        itemsPerView = window.innerWidth < 768 ? 1 : 3;
        maxIndex = Math.max(0, totalItems - itemsPerView);
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        updateCarousel();
    });
    updateCarousel();
}
document.addEventListener("DOMContentLoaded", () => {
    setupCarousel("facility");
    setupCarousel("achievement");
});
const modal = document.getElementById("modal");
const modalImage = document.getElementById("modal-image");
const modalTitle = document.getElementById("modal-title");
const modalDescription = document.getElementById("modal-description");
const modalContent = modal.querySelector(".modal-content");
const closedBtn = document.getElementById("closedBtn");

let lastFocusedElement = null;

function openModal(imageSrc, judul, deskripsi) {
    lastFocusedElement = document.activeElement;

    modalImage.src = imageSrc;
    modalTitle.textContent = judul;
    modalDescription.textContent = deskripsi || "";

    modal.classList.remove("hidden", "pointer-events-none");
    modal.removeAttribute("inert");

    requestAnimationFrame(() => {
        modal.classList.add("opacity-100");
        modalContent.classList.remove("scale-95");
        closedBtn.focus();
    });
}

function closeModal() {
    modal.classList.remove("opacity-100");
    modalContent.classList.add("scale-95");

    modal.setAttribute("inert", "");
    modal.classList.add("pointer-events-none");

    setTimeout(() => {
        modal.classList.add("hidden");
        modalImage.src = "";

        // kembalikan fokus ke elemen pemanggil
        if (lastFocusedElement) {
            lastFocusedElement.focus();
        }
    }, 300);
}

// Klik tombol close
closedBtn.addEventListener("click", closeModal);

// Klik area gelap (overlay) = close
modal.addEventListener("click", (e) => {
    if (!modalContent.contains(e.target)) {
        closeModal();
    }
});

// ESC untuk close
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
        closeModal();
    }
});
