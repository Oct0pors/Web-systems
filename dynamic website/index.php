<?php
// Movie Database Array
$movies = [
    [
        'title' => 'Minions',
        'genre' => 'Family/Comedy',
        'thumbnail' => 'Minions.jpg',
        'trailer' => 'Trailer.mp4'
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
        'trailer' => 'Jungle.mp4'
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

// Choose a hero movie by genre priority
$heroMovie = null;
$preferredGenres = ['Adventure', 'Horror', 'Family'];

foreach ($movies as $movie) {
    foreach ($preferredGenres as $genre) {
        if (stripos($movie['genre'], $genre) !== false) {
            $heroMovie = $movie;
            break 2; // Stop after first match
        }
    }
}

// Fallback if no match
if (!$heroMovie) {
    $heroMovie = $movies[0];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XILFTEN PRIME - Premium Movie Trailers</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Hero Section -->
<section class="hero-section text-center py-5">
    <h1 class="display-4"><?= $heroMovie['title']; ?></h1>
    <p class="lead"><?= $heroMovie['genre']; ?></p>
    <button onclick="openTrailer('<?= $heroMovie['trailer']; ?>')" class="btn btn-danger btn-lg mt-3">
        ▶ Watch Trailer
    </button>
</section>

<!-- Movie Gallery -->
<div class="container mt-5">
    <h2 class="mb-4">Latest Blockbusters</h2>
    <div class="row">
        <?php foreach ($movies as $movie): ?>
        <div class="col-md-3 mb-4">
            <div class="movie-card" onclick="openTrailer('<?= $movie['trailer']; ?>')">
                <img src="<?= $movie['thumbnail']; ?>" class="img-fluid rounded">
                <h5 class="mt-2"><?= $movie['title']; ?></h5>
                <p><?= $movie['genre']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Video Modal -->
<div class="modal fade" id="trailerModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-body position-relative">

                <!-- Loading Spinner -->
                <div id="videoLoader" class="video-loader">
                    <div class="spinner-border text-light"></div>
                    <p class="mt-2">Loading trailer...</p>
                </div>

                <!-- Video Player -->
                <div class="ratio ratio-16x9">
                    <video id="trailerVideo" controls autoplay muted>
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="script.js"></script>
</body>
</html>

