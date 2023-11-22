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


// for ( $i = 0; $i < count($hotels); $i++){
//     foreach ($hotels[$i])
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Nome</th>
                    <th scope="col" class="text-center">Descrizone</th>
                    <th scope="col" class="text-center">Parking</th>
                    <th scope="col" class="text-center">Voto</th>
                    <th scope="col" class="text-center">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($hotels as $hotel) {
                ?> <tr> <?php foreach ($hotel as $hotelInfo => $value) {
                            if ($hotelInfo == 'parking' && $value === true) { ?>
                                <td class="text-center">
                                    <?php echo 'La struttura è dotata di parcheggio'; ?>
                                </td>
                            <?php } else if ($hotelInfo == 'parking' && $value === false) {
                            ?> <td class="text-center">
                                    <?php echo 'La struttura non è dotata di parcheggio'; ?>
                                </td>
                            <?php } else if ($hotelInfo == 'distance_to_center') { ?>
                                <td class="text-center">
                                    <?php echo $value . ' Km'; ?>
                                </td>
                            <?php } else {
                            ?> <td class="text-center">
                                    <?php echo $value; ?>
                                </td>
                        <?php
                            }
                        } ?>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>