<?php

require_once __DIR__ . "/database.php";
require_once __DIR__ . "/Movie.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <?php foreach($movies as $movie) :
        $new_movie = new Movie($movie['title'],$movie['genres'],$movie['director'],$movie['runtime'], $movie['summary'],)    
    ?>
    <div>
        <h1>Title: <?php echo $new_movie->title ?></h1>
        <h3>Director: <?php echo $new_movie->director ?></h3>
        <h4>Runtime: <?php echo $new_movie->runtime ?></h4>
        <p><strong>Genres:</strong> 
            [
            <?php foreach($new_movie->genres as $genre)
                echo "<span> $genre </span>,";                
            ?>  
            ]
        </p>
        <p><?php echo $new_movie->getShrtndSummary(50) ?></p>
    </div>

    <?php endforeach; ?>
</body>
</html>