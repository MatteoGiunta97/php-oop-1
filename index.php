<?php
// create un file index.php in cui:
// - è definita una classe ‘Movie’
//   => all'interno della classe sono dichiarate delle variabili d'istanza
//   => all'interno della classe è definito un costruttore
//   => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie {
    public $title;
    public $duration;
    public $genre;

    public function __construct($title, $duration, $genre) {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
    }

    public function getMovieInfo() {
        return $this->title. ' - Duration: ' . $this->duration . ' min' . ' - Genre: ' . $this->genre;
    }
}

$interstellar = new Movie('Interstellar', '230', 'sci-fi');
$theMartian = new Movie('The Martian', '180', 'sci-fi');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <div>
        Film: <?php echo $interstellar->getMovieInfo();?>
    </div>
    <div>
        Film: <?php echo $theMartian->getMovieInfo();?>
    </div>
</body>
</html>