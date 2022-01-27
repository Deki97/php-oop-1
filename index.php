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


    // Istanza SpiderMan: No Way Home 
    $spidermanNoWayHome = new Movie('Spiderman: No Way Home', 'Action', '2h 28min');
    $spidermanNoWayHome->name = 'Spiderman: No Way Home';
    $spidermanNoWayHome->genre = 'Action';
    $spidermanNoWayHome->year = '2021';
    $spidermanNoWayHome->duration = '2h 28min';
    $spidermanNoWayHome->description = 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.';
    $spidermanNoWayHome->original_language = 'en';
    // var_dump($spidermanNoWayHome);


    // Istanza Red Notice
    $redNotice = new Movie('Red Notice', 'Action', '1h 57min');
    $redNotice->name = 'Red Notice';
    $redNotice->genre = 'Action';
    $redNotice->year = '2021';
    $redNotice->duration = '1h 57min';
    $redNotice->description = 'An Interpol-issued Red Notice is a global alert to hunt and capture the world\'s most wanted. But when a daring heist brings together the FBI\'s top profiler and two rival criminals, there\'s no telling what will happen.';
    $redNotice->original_language = 'en';


    // Istanza Avengers: Endgame
    $avengers = new Movie('Avengers: Endgame', 'Adventure', '3h 1min');
    $avengers->name = 'Avengers: Endgame';
    $avengers->genre = 'Adventure';
    $avengers->year = '2019';
    $avengers->duration = '3h 1min';
    $avengers->description = 'After the devastating events of Avengers: Infinity War, the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos\' actions and restore order to the universe once and for all, no matter what consequences may be in store.';
    $avengers->original_language = 'en';


    // Istanza La vita e' bella
    $laVitaEBella = new Movie('La vita è bella', 'Comedy', '1h 56min');
    $laVitaEBella->name = 'La vita è bella';
    $laVitaEBella->genre = 'Comedy';
    $laVitaEBella->year = '1997';
    $laVitaEBella->duration = '1h 56min';
    $laVitaEBella->description = 'A touching story of an Italian book seller of Jewish ancestry who lives in his own little fairy tale. His creative and happy life would come to an abrupt halt when his entire family is deported to a concentration camp during World War II. While locked up he tries to convince his son that the whole thing is just a game.';
    $laVitaEBella->original_language = 'it';

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

            <div class="single-movie">
                <ul>
                    <li>Name and Year: <?php echo $redNotice->getNameAndYear(); ?></li>
                    <li>Genre and Duration: <?php echo $redNotice->getGenreAndDuration(); ?></li>
                    <li>Description: <?php echo $redNotice->description; ?></li>
                    <li>Original language: <?php echo $redNotice->original_language; ?></li>
                </ul>
            </div>

            <div class="single-movie">
                <ul>
                    <li>Name and Year: <?php echo $avengers->getNameAndYear(); ?></li>
                    <li>Genre and Duration: <?php echo $avengers->getGenreAndDuration(); ?></li>
                    <li>Description: <?php echo $avengers->description; ?></li>
                    <li>Original language: <?php echo $avengers->original_language; ?></li>
                </ul>
            </div>

            <div class="single-movie">
                <ul>
                    <li>Name and Year: <?php echo $laVitaEBella->getNameAndYear(); ?></li>
                    <li>Genre and Duration: <?php echo $laVitaEBella->getGenreAndDuration(); ?></li>
                    <li>Description: <?php echo $laVitaEBella->description; ?></li>
                    <li>Original language: <?php echo $laVitaEBella->original_language; ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
