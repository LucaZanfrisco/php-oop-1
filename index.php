<?php
include __DIR__ . '/Database/db.php';
require_once __DIR__ . '/functions.php';

$film = set_array_film($movies);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Class Movie</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <div class="container">
        <ul class="lista">
            <?php foreach ($film as $value) : ?>
                <li class="oggetti-lista">
                    <h3><?php echo $value->title ?></h3>
                    <div>Data di uscita: <?php echo $value->date ?></div>
                    <div>Durata: <?php echo $value->time ?>min</div>
                    <span>Genere: </span>
                    <?php foreach ($value->genre as $genre) : ?>
                        <span><?php echo $genre ?></span>
                    <?php endforeach ?>
                    <div class="circle"><i class="fa-solid fa-paperclip"></i></div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>