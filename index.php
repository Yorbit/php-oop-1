<?php 
    class Movie {
        public $name;
        public $year;
        public $producedBy;

        function __construct($_name, $_year, $_producedBy){
            $this->name = $_name;
            $this->year = $_year;
            $this->producedBy = $_producedBy;
        }
        public function getName(){
            return $this->name;
        }
        public function getYear(){
            return $this->year;
        }
        public function getProduction(){
            return $this->producedBy;
        }
    }
    $movies = [];
    $movies[] = new Movie("Thor Love And Thunder", 2022, "Taika Waititi");
    $movies[] = new Movie('Black Panther Wakanda Forever', 2022, 'Ryan Coogler');
    $movies[] = new Movie('Ant-Man and the Wasp: Quantumania', 2022, 'Peyton Reed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP 1</title>
</head>
<body>
    <main>
        <div>
            <?php foreach ($movies as $movie) { ?>
                <h3> 
                    <?php echo $movie->getName(); ?>
                </h3>
                <p> <?php echo 'Produced By:'. '  '. $movie->getProduction(); ?> </p>
                <p> <?php echo 'Year:'. '  '. $movie->getYear(); ?> </p>
            <?php } ?>
        </div>
    </main>
</body>
</html>