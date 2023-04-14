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
?>