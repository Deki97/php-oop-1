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
            return $this->name . ', ' . $this->year;
        }


        // Metodo che ritorna genere e durata del film
        public function getGenreAndDuration() {
            return $this->genre . ', ' . $this->duration;
        }
    }

    $spidermanNoWayHome = new Movie('Spiderman: No Way Home', 'Action', '2h 28min');
    $spidermanNoWayHome->name = 'Spiderman: No Way Home';
    $spidermanNoWayHome->genre = 'Action';
    $spidermanNoWayHome->year = '2021';
    $spidermanNoWayHome->duration = '2h 28min';
    $spidermanNoWayHome->description = 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.';
    $spidermanNoWayHome->original_language = 'en';
    // var_dump($spidermanNoWayHome);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies List OOP</title>
</head>
<body>
    <div class="container">
        <div class="movie-list">
        <h1>Lista dei film</h1>
            <div class="single-movie">
                <ul>
                    <li>Name and Year: <?php echo $spidermanNoWayHome->getNameAndYear(); ?></li>
                    <li>Genre and Duration: <?php echo $spidermanNoWayHome->getGenreAndDuration(); ?></li>
                    <li>Description: <?php echo $spidermanNoWayHome->description; ?></li>
                    <li>Original language: <?php echo $spidermanNoWayHome->original_language; ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
