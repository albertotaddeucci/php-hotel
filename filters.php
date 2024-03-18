<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$hotelsWithParking = [];
$hotelWithVote = [];
$hotelFiltered = [];

if ($_GET["checkParking"] == true) {


    foreach ($hotels as $currentHotel) {
        $withParking = $currentHotel['parking'];

        if ($withParking == true) {
            $hotelsWithParking[] = $currentHotel;
        }
    }
} else (
    $hotelsWithParking = $hotels
);

// var_dump($hotelsWithParking);

if ($_GET["vote"] != "Seleziona voto minimo") {
    foreach ($hotels as $currentHotel) {
        $withVote = $currentHotel['vote'];
        if ($withVote >= $_GET["vote"]) {
            $hotelWithVote[] = $currentHotel;
        }
    };
} else {
    $hotelWithVote = $hotels;
};


// var_dump($hotelWithVote);

foreach ($hotelsWithParking as $hotel) {
    $hotelName = $hotel["name"];
    foreach ($hotelWithVote as $hotel2) {
        $hotelName2 = $hotel2["name"];
        if ($hotelName == $hotelName2) {
            $hotelFiltered[] = $hotel;
        }
    }
}
// var_dump($hotelFiltered);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel flitered</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>



    <div class="container">


        <h1>Hotel</h1>



        <table class="table mt-4">
            <thead>
                <tr>

                    <?php
                    foreach ($hotelFiltered[0] as $key => $value) {
                        echo "<th scope='col'>$key</th>";
                    }


                    ?>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotelFiltered as $currentHotel) {
                    echo
                    "<tr>
                    ";
                    foreach ($currentHotel as $key => $value) {
                        echo "<td>$value</td>";
                    }



                    "</tr>";
                }


                ?>


            </tbody>
        </table>


        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>