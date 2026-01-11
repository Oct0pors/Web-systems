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

        <!-- Top Picks Section -->
        <section class="movie-section">
            <h2 class="section-title">Top Picks for You</h2>
            <div class="movie-carousel" id="topPicksContainer">

                <!-- Movie 1 -->
                <div class="movie-card" data-genre="Animation, Action, Adventure" data-year="2014">
                    <img src="Bighero.jpg" alt="Big Hero 6" class="movie-thumb">
                    <h3 class="movie-title">Big Hero 6</h3>
                    <p class="movie-meta">2014 | PG | 1h 42m</p>
                    <p class="movie-genre">Animation, Action, Adventure</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/z3biFxZIJOQ">Watch Trailer</button>
                </div>

                <!-- Movie 2 -->
                <div class="movie-card" data-genre="Horror, Mystery, Thriller" data-year="2023">
                    <img src="Fnaf.jpg" alt="Five Nights at Freddy's" class="movie-thumb">
                    <h3 class="movie-title">Five Nights at Freddy's</h3>
                    <p class="movie-meta">2023 | PG-13 | 1h 50m</p>
                    <p class="movie-genre">Horror, Mystery, Thriller</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/0VH9WCFV6XQ">Watch Trailer</button>
                </div>

                <!-- Movie 3 -->
                <div class="movie-card" data-genre="Animation, Comedy, Family" data-year="2015">
                    <img src="Minions.jpg" alt="Minions" class="movie-thumb">
                    <h3 class="movie-title">Minions</h3>
                    <p class="movie-meta">2015 | PG | 1h 31m</p>
                    <p class="movie-genre">Animation, Comedy, Family</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/P9-FCC6I7u0">Watch Trailer</button>
                </div>

                <!-- Movie 4 -->
                <div class="movie-card" data-genre="Action, Adventure, Fantasy" data-year="2023">
                    <img src="Dungeons.jpg" alt="Dungeons & Dragons: Honor Among Thieves" class="movie-thumb">
                    <h3 class="movie-title">Dungeons & Dragons: Honor Among Thieves</h3>
                    <p class="movie-meta">2023 | PG-13 | 2h 14m</p>
                    <p class="movie-genre">Action, Adventure, Fantasy</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/IiMinixSXII">Watch Trailer</button>
                </div>

                <!-- Movie 5 -->
                <div class="movie-card" data-genre="Action, Comedy, Crime" data-year="2016">
                    <img src="Central.jpg" alt="Central Intelligence" class="movie-thumb">
                    <h3 class="movie-title">Central Intelligence</h3>
                    <p class="movie-meta">2016 | PG-13 | 1h 47m</p>
                    <p class="movie-genre">Action, Comedy, Crime</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/MxEw3elSJ8M">Watch Trailer</button>
                </div>

            </div>
        </section>

        <!-- Trending Section -->
        <section class="movie-section">
            <h2 class="section-title">Trending Now</h2>
            <div class="movie-carousel" id="trendingContainer">

                <!-- Movie 6 -->
                <div class="movie-card" data-genre="Animation, Adventure, Comedy" data-year="2014">
                    <img src="Book.jpg" alt="The Book of Life" class="movie-thumb">
                    <h3 class="movie-title">The Book of Life</h3>
                    <p class="movie-meta">2014 | PG | 1h 35m</p>
                    <p class="movie-genre">Animation, Adventure, Comedy</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/_i69CJc1BgE">Watch Trailer</button>
                </div>

                <!-- Movie 7 -->
                <div class="movie-card" data-genre="Action, Adventure, Horror" data-year="2019">
                    <img src="Escape.jpg" alt="Escape Room" class="movie-thumb">
                    <h3 class="movie-title">Escape Room</h3>
                    <p class="movie-meta">2019 | PG-13 | 1h 39m</p>
                    <p class="movie-genre">Action, Adventure, Horror</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/6dSKUoV0SNI">Watch Trailer</button>
                </div>

                <!-- Movie 8 -->
                <div class="movie-card" data-genre="Horror, Drama, Mystery" data-year="2015">
                    <img src="Dawn.jpg" alt="Until Dawn" class="movie-thumb">
                    <h3 class="movie-title">Until Dawn</h3>
                    <p class="movie-meta">2015 | M | 9h</p>
                    <p class="movie-genre">Horror, Drama, Mystery</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/2b3vBaINZ7w">Watch Trailer</button>
                </div>

                <!-- Movie 9 -->
                <div class="movie-card" data-genre="Adventure, Comedy, Family" data-year="2025">
                    <img src="Mine.jpg" alt="A Minecraft Movie" class="movie-thumb">
                    <h3 class="movie-title">A Minecraft Movie</h3>
                    <p class="movie-meta">2025 | PG | 1h 40m</p>
                    <p class="movie-genre">Adventure, Comedy, Family</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/wJO_vIDZn-I">Watch Trailer</button>
                </div>

                <!-- Movie 10 -->
                <div class="movie-card" data-genre="Action, Adventure, Comedy" data-year="2017">
                    <img src="Jumanji.jpg" alt="Jumanji: Welcome to the Jungle" class="movie-thumb">
                    <h3 class="movie-title">Jumanji: Welcome to the Jungle</h3>
                    <p class="movie-meta">2017 | PG-13 | 1h 59m</p>
                    <p class="movie-genre">Action, Adventure, Comedy</p>
                    <button class="watch-trailer" data-trailer="https://www.youtube.com/embed/2QKg5SZ_35I">Watch Trailer</button>
                </div>

            </div>
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

    <!-- Script -->
    <script src="script.js"></script>
</body>
</html>
