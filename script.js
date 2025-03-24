// Carousel logic for testimonials
let slideIndex = 0;
let autoScrollInterval;

function showSlides(n) {
    const slides = document.getElementsByClassName('testimonial-slide');
    const dots = document.getElementsByClassName('dot');

    if (n >= slides.length) slideIndex = 0;
    if (n < 0) slideIndex = slides.length - 1;

    Array.from(slides).forEach(slide => slide.classList.remove('active'));
    Array.from(dots).forEach(dot => dot.classList.remove('active'));

    if (slides.length > 0) {
        slides[slideIndex].classList.add('active');
        dots[slideIndex].classList.add('active');
    }
}

function nextSlide() {
    slideIndex++;
    showSlides(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlides(slideIndex);
}

function currentSlide(n) {
    slideIndex = n;
    showSlides(slideIndex);
    resetAutoScroll();
}

function resetAutoScroll() {
    clearInterval(autoScrollInterval);
    autoScrollInterval = setInterval(nextSlide, 5000); // Auto-scroll every 5 seconds
}

// Initialize carousel if elements exist
const slides = document.getElementsByClassName('testimonial-slide');
if (slides.length > 0) {
    showSlides(slideIndex);
    resetAutoScroll();

    const prev = document.querySelector('.prev');
    if (prev) {
        prev.addEventListener('click', () => {
            prevSlide();
            resetAutoScroll();
        });
    }

    const next = document.querySelector('.next');
    if (next) {
        next.addEventListener('click', () => {
            nextSlide();
            resetAutoScroll();
        });
    }

    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => currentSlide(index));
    });
}

// Modal functionality for sign-up
const modal = document.getElementById('signup-modal');
if (modal) {
    const closeBtn = modal.querySelector('.close');
    const signupButton = document.getElementById('signup-button');

    if (signupButton) {
        signupButton.addEventListener('click', () => {
            modal.style.display = 'flex';
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    }

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Add event listeners to "Try now" buttons
    const tryNowButtons = document.querySelectorAll('.try-now-button');
    tryNowButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            modal.style.display = 'flex';
        });
    });
}

// Project Collaboration Modal functionality
const projectModal = document.getElementById('project-collaboration-modal');
if (projectModal) {
    const projectCloseBtn = projectModal.querySelector('.close');
    const projectLearnMore = document.querySelector('.project-collaboration-learn-more');

    if (projectLearnMore) {
        projectLearnMore.addEventListener('click', (event) => {
            event.preventDefault();
            projectModal.style.display = 'flex';
        });
    }

    if (projectCloseBtn) {
        projectCloseBtn.addEventListener('click', () => {
            projectModal.style.display = 'none';
        });
    }

    window.addEventListener('click', (event) => {
        if (event.target === projectModal) {
            projectModal.style.display = 'none';
        }
    });
}

// Design Tools Modal functionality
const designToolsModal = document.getElementById('design-tools-modal');
if (designToolsModal) {
    const designToolsCloseBtn = designToolsModal.querySelector('.close');
    const designToolsLearnMore = document.querySelector('.design-tools-learn-more');

    if (designToolsLearnMore) {
        designToolsLearnMore.addEventListener('click', (event) => {
            event.preventDefault();
            designToolsModal.style.display = 'flex';
        });
    }

    if (designToolsCloseBtn) {
        designToolsCloseBtn.addEventListener('click', () => {
            designToolsModal.style.display = 'none';
        });
    }

    window.addEventListener('click', (event) => {
        if (event.target === designToolsModal) {
            designToolsModal.style.display = 'none';
        }
    });
}

// Contact Us Modal functionality
const contactModal = document.getElementById('contact-modal');
if (contactModal) {
    const contactLink = document.querySelector('.contact-us');
    const contactCloseBtn = contactModal.querySelector('.close');

    if (contactLink) {
        contactLink.addEventListener('click', (event) => {
            event.preventDefault();
            contactModal.style.display = 'flex';
        });
    }

    if (contactCloseBtn) {
        contactCloseBtn.addEventListener('click', () => {
            contactModal.style.display = 'none';
        });
    }

    window.addEventListener('click', (event) => {
        if (event.target === contactModal) {
            contactModal.style.display = 'none';
        }
    });
}