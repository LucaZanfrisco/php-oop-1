<?php 
    class Movie { 
        public string $title;
        public string $date;
        public int $time;
        public array $genre;

        public function __construct(string $title, string $date, int $time, array $genre){
            $this->title = $title;
            $this->date = $date;
            $this->time = $time;
            $this->genre = $genre;
        }
        public function getTime(){
            return $this->time;
        }
    };
    
    $movie = new Movie('Il gatto con gli stivali','07-12-2022',104,['animazione','avventura','commedia','fantastico']);
    var_dump($movie);
    var_dump($movie->getTime());

?>
