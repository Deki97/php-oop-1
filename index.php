<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

    class Movie {

        public $name;

        public $genre;

        public $year;

        public $duration;

        public $description;

        public $original_language;

        public function __construct($_name, $_genre, $_duration) {
            $this->name = $_name;
            $this->genre = $genre;
            $this->duration = $duration;
        }


        // Metodo che ritorna nome e anno di uscita del film
        public function getNameAndYear() {
            return $this->name . ' ' . $this->year;
        }


        // Metodo che ritorna genere e durata del film
        public function getGenreAndDuration() {
            return $this->genre . ' ' . $this->duration;
        }
    }

?>
