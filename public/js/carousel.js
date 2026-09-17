export function initCarousel() {

    const slides =
        document.querySelectorAll(".hero-slide");

    const dots =
        document.querySelectorAll(".carousel-dot");

    const nextButton =
        document.getElementById("carouselNext");

    if (!slides.length) {
        return;
    }

    let currentSlide = 0;
    let isAnimating = false;

    function showSlide(index) {

        if (isAnimating || index === currentSlide) {
            return;
        }

        isAnimating = true;

        slides[currentSlide]
            .classList.remove("active");

        currentSlide = index;

        slides[currentSlide]
            .classList.add("active");

        dots.forEach((dot, i) => {

            dot.classList.toggle(
                "active",
                i === currentSlide
            );

        });

        setTimeout(() => {
            isAnimating = false;
        }, 800);
    }

    dots.forEach((dot, index) => {

        dot.addEventListener("click", () => {
            showSlide(index);
        });

    });

    if (nextButton) {

        nextButton.addEventListener("click", () => {

            const nextSlide =
                (currentSlide + 1) % slides.length;

            showSlide(nextSlide);

        });

    }
}