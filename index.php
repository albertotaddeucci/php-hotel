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

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>


    <div class="container">


        <h1>Hotels</h1>



        <table class="table mt-4">
            <thead>
                <tr>

                    <?php
                    foreach ($hotels[0] as $key => $value) {
                        echo "<th scope='col'>$key</th>";
                    }


                    ?>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $currentHotel) {
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

        <div class="row">

            <div class="col-6">

                <form action="filters.php">

                    <div class="form-check my-3">
                        <input name="checkParking" class=" form-check-input" type="checkbox" value="true" id="checkParking">
                        <label class="form-check-label" for="checkParking">
                            Con parcheggio
                        </label>
                    </div>

                    <select name="vote" class="form-select" aria-label="Default select example">
                        <option selected>Seleziona voto minimo</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                    <input type="submit" class="btn btn-danger my-4">

                </form>

            </div>
        </div>





    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>