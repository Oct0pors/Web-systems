// Preloader & Header Effects
window.addEventListener('load', () => setTimeout(() => document.getElementById('preloader').style.display = 'none', 1000));

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    window.scrollY > 50 ? header.classList.add('scrolled') : header.classList.remove('scrolled');
});

document.getElementById('logo').addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));

// =========================================
// 1. Data & DOM Elements
// =========================================

// Wallpaper Images
const heroImages = [
    '1.png', 
    '2.jpg',
    '3.jpeg',
    '4.jpg'
];

// Containers
const topPicksContainer = document.getElementById('topPicksContainer');
const trendingContainer = document.getElementById('trendingContainer');

// Filter Inputs
const genreFilter = document.getElementById('genreFilter');
const yearFilter = document.getElementById('yearFilter');
const resetBtn = document.getElementById('resetFilters');

// =========================================
// 2. Main Logic
// =========================================

function createMovieCard(movie) {
    return `
        <div class="movie-card" data-movie-id="${movie.id}">
            <img src="${movie.thumbnail}" alt="${movie.title}" class="movie-thumbnail">
            <div class="movie-overlay">
                <h3 class="movie-title">${movie.title}</h3>
                <p class="movie-year">${movie.year}</p>
            </div>
        </div>
    `;
}

function renderCarousels(filterGenre = 'all', filterYear = 'all') {
    // 1. Check if the user is currently filtering
    const isFiltering = (filterGenre !== 'all' || filterYear !== 'all');

    // 2. Filter the Data
    let filteredMovies = moviesData.filter(movie => {
        const genreMatch = filterGenre === 'all' || movie.genre.includes(filterGenre);
        
        let yearMatch = false;
        if (filterYear === 'all') yearMatch = true;
        else if (filterYear === '2014') yearMatch = parseInt(movie.year) <= 2020;
        else yearMatch = movie.year === filterYear;

        return genreMatch && yearMatch;
    });

    // 3. Clear Containers
    topPicksContainer.innerHTML = '';
    trendingContainer.innerHTML = '';

    // 4. LOGIC SWITCH: Loop vs Single Result
    if (isFiltering) {
        // --- SEARCH MODE ---
        // Turn OFF duplicates (Loop = 1)
        // Hide the "Trending" section so we don't see results twice
        // Change "Top Picks" title to "Search Results"
        
        const trendingSection = trendingContainer.closest('.movie-section');
        const topPicksSection = topPicksContainer.closest('.movie-section');
        const topPicksTitle = topPicksSection.querySelector('.section-title');

        if(filteredMovies.length > 0) {
            // Show exact matches, no looping
            fillContainer(topPicksContainer, filteredMovies, 1); 
            
            // Updates styles for Search Mode
            trendingSection.style.display = 'none';
            topPicksTitle.textContent = `Found ${filteredMovies.length} Movies`;
        } else {
            topPicksContainer.innerHTML = '<p style="color: #999; padding-left: 10px;">No movies found.</p>';
            trendingSection.style.display = 'none';
            topPicksTitle.textContent = 'Search Results';
        }

    } else {
        // --- HOME MODE ---
        // Turn ON duplicates (Loop = 6) for infinite scroll effect
        // Show both sections
        
        const trendingSection = trendingContainer.closest('.movie-section');
        const topPicksSection = topPicksContainer.closest('.movie-section');
        
        trendingSection.style.display = 'block';
        topPicksSection.querySelector('.section-title').textContent = 'Top Picks for You';

        const topMovies = filteredMovies.filter(m => m.category === 'top');
        const trendMovies = filteredMovies.filter(m => m.category === 'trending');

        fillContainer(topPicksContainer, topMovies, 6);
        fillContainer(trendingContainer, trendMovies, 6);
    }

    // 5. Re-attach Click Events
    attachModalEvents();
}

function fillContainer(container, list, repeats) {
    if(list.length === 0) return;
    
    let htmlContent = '';
    // This loop creates the duplicates. 
    // If repeats is 1, it runs once. If 6, it runs 6 times.
    for (let i = 0; i < repeats; i++) {
        list.forEach(movie => {
            htmlContent += createMovieCard(movie);
        });
    }
    container.innerHTML = htmlContent;
}

// =========================================
// 3. Modal Logic
// =========================================
const modal = document.getElementById('movieModal');
const closeModal = document.querySelector('.close-modal');

function attachModalEvents() {
    const allCards = document.querySelectorAll('.movie-card');
    allCards.forEach(card => {
        card.addEventListener('click', function() {
            const movieId = parseInt(this.getAttribute('data-movie-id'));
            const movie = moviesData.find(m => m.id === movieId);
            if (movie) {
                document.getElementById('modalTitle').textContent = movie.title;
                document.getElementById('modalYear').textContent = movie.year;
                document.getElementById('modalRating').textContent = movie.rating;
                document.getElementById('modalDuration').textContent = movie.duration;
                document.getElementById('modalGenre').textContent = movie.genre;
                document.getElementById('modalDescription').textContent = movie.description;
                document.getElementById('trailerFrame').src = movie.trailer + '?autoplay=1';
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        });
    });
}

function closeModalFunction() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('trailerFrame').src = '';
}

closeModal.addEventListener('click', closeModalFunction);
modal.addEventListener('click', (e) => { if (e.target === modal) closeModalFunction(); });
document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeModalFunction(); });

// =========================================
// 4. Events & Initialization
// =========================================

genreFilter.addEventListener('change', () => {
    renderCarousels(genreFilter.value, yearFilter.value);
});

yearFilter.addEventListener('change', () => {
    renderCarousels(genreFilter.value, yearFilter.value);
});

resetBtn.addEventListener('click', () => {
    genreFilter.value = 'all';
    yearFilter.value = 'all';
    renderCarousels();
});

// Scroll Logic
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
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });
});

// Hero Background
const heroSection = document.querySelector('.hero');
let currentImageIndex = 0;
function changeHeroBackground() {
    if (heroImages.length > 0) {
        heroSection.style.backgroundImage = `url('${heroImages[currentImageIndex]}')`;
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
    }
}
changeHeroBackground();
setInterval(changeHeroBackground, 5000);

// Initial Render
renderCarousels();
