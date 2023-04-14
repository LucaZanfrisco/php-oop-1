
<?php 
function set_array_film($movies){
    foreach ($movies as $movie) {
        $film[] = new Movie($movie['title'], $movie['date'], $movie['time'], $movie['genre']);
    }
    return $film;
}
?>