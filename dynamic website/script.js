// ===========================
// XILFTEN PRIME - JavaScript
// ===========================

// Global Variables
let trailerModal;
let trailerIframe;
let autoCloseTimer;

// Initialize on DOM Load
document.addEventListener('DOMContentLoaded', function() {
    // Get modal and iframe elements
    trailerModal = new bootstrap.Modal(document.getElementById('trailerModal'));
    trailerIframe = document.getElementById('trailerIframe');
    
    // Add event listener for modal close
    document.getElementById('trailerModal').addEventListener('hidden.bs.modal', function() {
        stopTrailer();
    });
    
    // Navbar scroll effect
    handleNavbarScroll();
});

/**
 * Open trailer in modal with autoplay
 * @param {string} trailerUrl - YouTube embed URL
 */
function openTrailer(trailerUrl) {
    // Set the iframe source with autoplay parameter
    trailerIframe.src = trailerUrl;
    
    // Show the modal
    trailerModal.show();
    
    // Set auto-close timer (60 seconds)
    clearTimeout(autoCloseTimer);
    autoCloseTimer = setTimeout(function() {
        closeTrailer();
    }, 60000); // 60 seconds
}

/**
 * Close trailer modal
 */
function closeTrailer() {
    trailerModal.hide();
    stopTrailer();
}

/**
 * Stop trailer playback and clear timer
 */
function stopTrailer() {
    // Clear the iframe source to stop video
    trailerIframe.src = '';
    
    // Clear auto-close timer
    clearTimeout(autoCloseTimer);
}

/**
 * Handle navbar background on scroll
 */
function handleNavbarScroll() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(20, 20, 20, 0.95)';
        } else {
            navbar.style.background = 'linear-gradient(180deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%)';
        }
    });
}

/**
 * Add smooth scroll behavior
 */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

/**
 * Keyboard accessibility for movie cards
 */
document.querySelectorAll('.movie-card').forEach(card => {
    // Make cards keyboard accessible
    card.setAttribute('tabindex', '0');
    card.setAttribute('role', 'button');
    
    // Add keyboard support
    card.addEventListener('keypress', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.click();
        }
    });
});

/**
 * Preload hero background image
 */
function preloadHeroImage() {
    const heroSection = document.querySelector('.hero-section');
    const bgImage = new Image();
    bgImage.src = 'https://loremflickr.com/1920/1080/cinematic,movie';
    
    bgImage.onload = function() {
        heroSection.style.backgroundImage = `linear-gradient(rgba(0,0,0,0.5), rgba(20,20,20,0.9)), url('${bgImage.src}')`;
    };
}

// Call preload function
preloadHeroImage();

/**
 * Add loading state to images
 */
document.querySelectorAll('.movie-thumbnail img').forEach(img => {
    img.addEventListener('load', function() {
        this.classList.add('loaded');
    });
});

/**
 * Performance: Lazy load movie thumbnails
 */
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                img.classList.add('fade-in');
                observer.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('.movie-thumbnail img').forEach(img => {
        imageObserver.observe(img);
    });
}

// Console easter egg
console.log('%c🎬 XILFTEN PRIME', 'color: #e50914; font-size: 24px; font-weight: bold;');
console.log('%cWelcome to the future of entertainment.', 'color: #b3b3b3; font-size: 14px;');