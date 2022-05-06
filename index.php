<?php 
include ("./data/Movie.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
        <?php $top_gun = new Movie ("Top Gun", 1986, "Tony Scott", "110 min" );?>
        <h1>Title : <?php echo $top_gun->get_title(); ?></h1>

        <p>Year: <?php echo $top_gun->get_date(); ?></p>

        <p>Duration: <?php echo $top_gun->get_duration(); ?></p>

        <p>Director: <?php echo $top_gun->get_director(); ?></p>


        <?php $batman_begins = new Movie ("Batman Begins", 2005, "Christopher Nolan", "140 min" );?>
        <h1>Title : <?php echo $batman_begins->get_title(); ?></h1>

        <p>Year: <?php echo $batman_begins->get_date(); ?></p>

        <p>Duration: <?php echo $batman_begins->get_duration(); ?></p>

        <p>Director: <?php echo $batman_begins->get_director(); ?></p>
</body>
</html>