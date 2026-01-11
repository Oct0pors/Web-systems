<?php
// Movie Database - 10 Movies
$movies = [
    [
        'id' => 1,
        'title' => 'Big Hero 6',
        'description' => 'A young robotics prodigy forms a superhero team to combat a masked villain threatening San Fransokyo.',
        'year' => '2014',
        'rating' => 'PG',
        'duration' => '1h 42m',
        'genre' => 'Animation, Action, Adventure',
        'thumbnail' => 'Bighero.jpg',
        'trailer' => 'https://www.youtube.com/embed/z3biFxZIJOQ',
        'category' => 'top'
    ],
    [
        'id' => 2,
        'title' => 'Five Nights at Freddy\'s',
        'description' => 'A troubled security guard begins working at Freddy Fazbear\'s Pizza, where he discovers the haunted animatronics.',
        'year' => '2023',
        'rating' => 'PG-13',
        'duration' => '1h 50m',
        'genre' => 'Horror, Mystery, Thriller',
        'thumbnail' => 'Fnaf.jpg',
        'trailer' => 'https://www.youtube.com/embed/0VH9WCFV6XQ',
        'category' => 'top'
    ],
    [
        'id' => 3,
        'title' => 'Minions',
        'description' => 'Minions Stuart, Kevin, and Bob are recruited by Scarlet Overkill, a super-villain who plots to take over the world.',
        'year' => '2015',
        'rating' => 'PG',
        'duration' => '1h 31m',
        'genre' => 'Animation, Comedy, Family',
        'thumbnail' => 'Minions.jpg',
        'trailer' => 'https://www.youtube.com/embed/P9-FCC6I7u0',
        'category' => 'top'
    ],
    [
        'id' => 4,
        'title' => 'Dungeons & Dragons: Honor Among Thieves',
        'description' => 'A charming thief and a band of unlikely adventurers embark on an epic quest to retrieve a lost relic.',
        'year' => '2023',
        'rating' => 'PG-13',
        'duration' => '2h 14m',
        'genre' => 'Action, Adventure, Fantasy',
        'thumbnail' => 'Dungeons.jpg',
        'trailer' => 'https://www.youtube.com/embed/IiMinixSXII',
        'category' => 'top'
    ],
[
        'id' => 5,
        'title' => 'Central Intelligence',
        'description' => 'A mild-mannered accountant is lured into the world of international espionage after reconnecting with an old high school friend.',
        'year' => '2016',
        'rating' => 'PG-13',
        'duration' => '1h 47m',
        'genre' => 'Action, Comedy, Crime',
        'thumbnail' => 'Central.jpg',
        'trailer' => 'https://www.youtube.com/embed/MxEw3elSJ8M',
        'category' => 'top'
    ],
    [
        'id' => 6,
        'title' => 'The Book of Life',
        'description' => 'Manolo, a young man who is torn between fulfilling the expectations of his family and following his heart, embarks on an adventure.',
        'year' => '2014',
        'rating' => 'PG',
        'duration' => '1h 35m',
        'genre' => 'Animation, Adventure, Comedy',
        'thumbnail' => 'Book.jpg',
        'trailer' => 'https://www.youtube.com/embed/_i69CJc1BgE',
        'category' => 'trending'
    ],
    [
        'id' => 7,
        'title' => 'Escape Room',
        'description' => 'Six strangers find themselves in a maze of deadly mystery rooms and must use their wits to survive.',
        'year' => '2019',
        'rating' => 'PG-13',
        'duration' => '1h 39m',
        'genre' => 'Action, Adventure, Horror',
        'thumbnail' => 'Escape.jpg',
        'trailer' => 'https://www.youtube.com/embed/6dSKUoV0SNI',
        'category' => 'trending'
    ],
    [
        'id' => 8,
        'title' => 'Until Dawn',
        'description' => 'Eight friends trapped on a remote mountain retreat, and they are not alone. Gripped by dread, they must fight to survive the night.',
        'year' => '2015',
        'rating' => 'M',
        'duration' => '9h', 
        'genre' => 'Horror, Drama, Mystery',
        'thumbnail' => 'Dawn.jpg',
        'trailer' => 'https://www.youtube.com/embed/2b3vBaINZ7w',
        'category' => 'trending'
    ],
    [
        'id' => 9,
        'title' => 'A Minecraft Movie',
        'description' => 'Four misfits are pulled through a mysterious portal into the Overworld, a bizarre, cubic wonderland that thrives on imagination.',
        'year' => '2025',
        'rating' => 'PG',
        'duration' => '1h 40m', // Estimated
        'genre' => 'Adventure, Comedy, Family',
        'thumbnail' => 'Mine.jpg',
        'trailer' => 'https://www.youtube.com/embed/wJO_vIDZn-I',
        'category' => 'trending'
    ],
    [
        'id' => 10,
        'title' => 'Jumanji: Welcome to the Jungle',
        'description' => 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.',
        'year' => '2017',
        'rating' => 'PG-13',
        'duration' => '1h 59m',
        'genre' => 'Action, Adventure, Comedy',
        'thumbnail' => 'Jumanji.jpg',
        'trailer' => 'https://www.youtube.com/embed/2QKg5SZ_35I',
        'category' => 'trending'
    ]
];



// Separate movies by category
$topPicks = array_filter($movies, function($movie) {
    return $movie['category'] === 'top';
});

$trending = array_filter($movies, function($movie) {
    return $movie['category'] === 'trending';
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XILFTEN PRIME - Stream Premium Movies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- TADUM Preloader -->
    <div id="preloader">
        <img src="logo.png" alt="XILFTEN PRIME" class="preloader-logo">
    </div>

    <!-- Header -->
    <header class="header">
        <img src="logo.png" alt="XILFTEN PRIME" class="logo" id="logo">
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to XILFTEN PRIME</h1>
                <p class="hero-subtitle">Stream unlimited movies and shows</p>
            </div>
        </section>

        <section class="filter-section">
            <div class="filter-container">
                <span class="filter-label">Filter by:</span>
                <select id="genreFilter" class="filter-select">
                    <option value="all">All Genres</option>
                    <option value="Action">Action</option>
                    <option value="Animation">Animation</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Adventure">Adventure</option>
                </select>

                <select id="yearFilter" class="filter-select">
                    <option value="all">All Years</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2014">2014 - 2020</option>
                </select>
                
                <button id="resetFilters" class="filter-reset">Reset</button>
            </div>
        </section>

        <section class="movie-section">
            <h2 class="section-title">Top Picks for You</h2>
            <div class="movie-carousel" id="topPicksContainer"></div>
        </section>

        <section class="movie-section">
            <h2 class="section-title">Trending Now</h2>
             <div class="movie-carousel" id="trendingContainer"></div>
        </section>
    </main>

    <!-- Movie Modal -->
    <div id="movieModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <div class="modal-video">
                    <iframe id="trailerFrame" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-info">
                    <h2 id="modalTitle"></h2>
                    <div class="modal-meta">
                        <span id="modalYear"></span>
                        <span id="modalRating"></span>
                        <span id="modalDuration"></span>
                    </div>
                    <p id="modalGenre"></p>
                    <p id="modalDescription"></p>
                    <button class="play-button">▶ Play</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Movie Data as JSON for JavaScript -->
    <script>
        const moviesData = <?php echo json_encode($movies); ?>;
    </script>
    <script src="script.js"></script>
</body>
</html>
