<?php
// Movie Database Array
$movies = [
    [
        'title' => 'Minions',
        'genre' => 'Family/Comedy',
        'thumbnail' => 'Minions.jpg',
        'trailer' => 'Trailer1.mp4'
    ],
    [
        'title' => 'Dungeons & Dragons: Honor Among Thieves',
        'genre' => 'Adventure/Fantasy',
        'thumbnail' => 'Dungeons.jpg',
        'trailer' => 'Dnd.mp4'
    ],
    [
        'title' => 'Big Hero 6',
        'genre' => 'Family/Action',
        'thumbnail' => 'BigHero.jpg',
        'trailer' => 'Hero.mp4'
    ],
    [
        'title' => 'Five Nights at Freddy`s',
        'genre' => 'Horror/Mystery',
        'thumbnail' => 'Fnaf.jpg',
        'trailer' => 'Nights.mp4'
    ],
    [
        'title' => 'The Book Of Life',
        'genre' => 'Family/Adventure',
        'thumbnail' => 'Book.jpg',
        'trailer' => 'Life.mp4'
    ],
    [
        'title' => 'Until Dawn',
        'genre' => 'Horror/Survival',
        'thumbnail' => 'Dawn.jpg',
        'trailer' => 'Until.mp4'
    ],
    [
        'title' => 'Jumanji: Welcome to the Jungle',
        'genre' => 'Adventure/Action',
        'thumbnail' => 'Jumanji.jpg',
        'trailer' => 'Jungle'
    ],
    [
        'title' => 'Central Intelligence',
        'genre' => 'Comedy/Action',
        'thumbnail' => 'Central.jpg',
        'trailer' => 'Intelligence.mp4'
    ],
    [
        'title' => 'A Minecraft Movie',
        'genre' => 'Adventure/Fantasy',
        'thumbnail' => 'Mine.jpg',
        'trailer' => 'Craft.mp4'
    ],
    [
        'title' => 'Escape Room',
        'genre' => 'Horror/Sci-Fi',
        'thumbnail' => 'Escape.jpg',
        'trailer' => 'Room.mp4'
    ]
];

$heroMovie = $movies[0]; // Featured movie for hero section
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XILFTEN PRIME - Premium Movie Trailers</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <h1 class="logo">XILFTEN <span class="highlight">PRIME</span></h1>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#movies">Movies</a>
                <a href="#series">Series</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(20,20,20,0.9)), url('https://loremflickr.com/1920/1080/cinematic,movie');">
        <div class="hero-content">
            <span class="badge-trending">TRENDING NOW</span>
            <h1 class="hero-title"><?php echo $heroMovie['title']; ?></h1>
            <p class="hero-genre"><?php echo $heroMovie['genre']; ?></p>
            <p class="hero-description">
                Experience the most anticipated blockbuster of the year. 
                A mind-bending journey that will redefine cinema.
            </p>
            <button class="btn-hero" onclick="openTrailer('<?php echo $heroMovie['trailer']; ?>')">
                <span class="play-icon">▶</span> Watch Trailer
            </button>
        </div>
    </section>

    <!-- Movie Gallery -->
    <section class="movie-gallery">
        <div class="container-fluid">
            <h2 class="section-title">Latest Blockbusters</h2>
            <div class="movie-grid">
                <?php foreach($movies as $index => $movie): ?>
                <div class="movie-card" onclick="openTrailer('<?php echo $movie['trailer']; ?>')">
                    <div class="movie-thumbnail">
                        <img src="<?php echo $movie['thumbnail']; ?>" alt="<?php echo $movie['title']; ?>">
                        <div class="movie-overlay">
                            <div class="play-button">▶</div>
                        </div>
                    </div>
                    <div class="movie-info">
                        <h3 class="movie-title"><?php echo $movie['title']; ?></h3>
                        <p class="movie-genre"><?php echo $movie['genre']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Video Modal -->
    <div class="modal fade" id="trailerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe id="trailerIframe" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 XILFTEN PRIME. All Rights Reserved.</p>
            <p class="footer-tagline">Your Gateway to Cinematic Excellence</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>

</html>




