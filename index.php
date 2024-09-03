<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Data/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

    <h3>Movie list:</h3>
    <ul>
        <?php foreach ($movies as $movie): ?>
            <li>
                <h4>Title: <?php echo $movie->name; ?></h4>
                <h4>Director: <?php echo $movie->director; ?></h4>
                <h4>Year: <?php echo $movie->year; ?></h4>
                <h4>Genres: <?php echo $movie->name; ?></h4>
                <h4>Duration: <?php echo $movie->name; ?>min</h4>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>