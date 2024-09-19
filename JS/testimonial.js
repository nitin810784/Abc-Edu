document.addEventListener("DOMContentLoaded", function () {
    let testimonials = document.querySelectorAll(".testimonial-item");
    let dots = document.querySelectorAll(".slider-dot");
    let currentIndex = 0;
    let timer;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.classList.remove("active");
            dots[i].classList.remove("active");
            if (i === index) {
                testimonial.classList.add("active");
                dots[i].classList.add("active");
            }
        });
    }

    function autoSlide() {
        timer = setInterval(function () {
            currentIndex = (currentIndex + 1) % testimonials.length;
            showTestimonial(currentIndex);
        }, 5000);
    }

    autoSlide();

    dots.forEach((dot, index) => {
        dot.addEventListener("click", function () {
            clearInterval(timer);
            showTestimonial(index);
            currentIndex = index;
            autoSlide();
        });
    });

    showTestimonial(currentIndex);
});
