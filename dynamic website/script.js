// Preloader & Header Effects
window.addEventListener('load', () => setTimeout(() => document.getElementById('preloader').style.display = 'none', 1000));

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    window.scrollY > 50 ? header.classList.add('scrolled') : header.classList.remove('scrolled');
});

document.getElementById('logo').addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));

// =========================================
// 1. DOM Elements
// =========================================

const topPicksContainer = document.getElementById('topPicksContainer');
const trendingContainer = document.getElementById('trendingContainer');

const genreFilter = document.getElementById('genreFilter');
const yearFilter = document.getElementById('yearFilter');
const resetBtn = document.getElementById('resetFilters');

const modal = document.getElementById('movieModal');
const closeModal = document.querySelector('.close-modal');
const trailerFrame = document.getElementById('trailerFrame');

// =========================================
// 2. Modal Logic
// =========================================

function attachModalEvents() {
    const allCards = document.querySelectorAll('.movie-card');
    allCards.forEach(card => {
        card.addEventListener('click', function() {
            const title = this.querySelector('.movie-title').textContent;
            const year = this.querySelector('.movie-meta').textContent.split('|')[0].trim();
            const meta = this.querySelector('.movie-meta').textContent.split('|');
            const rating = meta[1] ? meta[1].trim() : '';
            const duration = meta[2] ? meta[2].trim() : '';
            const genre = this.getAttribute('data-genre') || '';
            const description = this.getAttribute('data-description') || '';
            const trailer = this.querySelector('button.watch-trailer')?.getAttribute('data-trailer') || '';

            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalYear').textContent = year;
            document.getElementById('modalRating').textContent = rating;
            document.getElementById('modalDuration').textContent = duration;
            document.getElementById('modalGenre').textContent = genre;
            document.getElementById('modalDescription').textContent = description;
            trailerFrame.src = trailer + '?autoplay=1';

            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    });
}

function closeModalFunction() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    trailerFrame.src = '';
}

closeModal.addEventListener('click', closeModalFunction);
modal.addEventListener('click', e => { if (e.target === modal) closeModalFunction(); });
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModalFunction(); });

// =========================================
// 3. Filter Logic
// =========================================

function filterMovies() {
    const genreValue = genreFilter.value.toLowerCase();
    const yearValue = yearFilter.value;

    [topPicksContainer, trendingContainer].forEach(container => {
        const cards = container.querySelectorAll('.movie-card');
        cards.forEach(card => {
            let matchesGenre = genreValue === 'all' || card.getAttribute('data-genre').toLowerCase().includes(genreValue);
            let matchesYear = yearValue === 'all' || card.getAttribute('data-year') === yearValue || (yearValue === '2014' && parseInt(card.getAttribute('data-year')) <= 2020);

            if(matchesGenre && matchesYear) card.style.display = 'block';
            else card.style.display = 'none';
        });
    });
}

genreFilter.addEventListener('change', filterMovies);
yearFilter.addEventListener('change', filterMovies);

resetBtn.addEventListener('click', () => {
    genreFilter.value = 'all';
    yearFilter.value = 'all';
    filterMovies();
});

// =========================================
// 4. Scroll & Drag for Carousels
// =========================================

[topPicksContainer, trendingContainer].forEach(carousel => {
    let isDown = false, startX, scrollLeft;
    carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
    });
    carousel.addEventListener('mouseleave', () => isDown = false);
    carousel.addEventListener('mouseup', () => isDown = false);
    carousel.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });
});

// =========================================
// 5. Hero Background
// =========================================

const heroSection = document.querySelector('.hero');
const heroImages = ['1.png', '2.jpg', '3.jpeg', '4.jpg'];
let currentImageIndex = 0;

function changeHeroBackground() {
    if(heroImages.length > 0) {
        heroSection.style.backgroundImage = `url('${heroImages[currentImageIndex]}')`;
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
    }
}
changeHeroBackground();
setInterval(changeHeroBackground, 5000);

// =========================================
// 6. Initialization
// =========================================

attachModalEvents();
filterMovies();
