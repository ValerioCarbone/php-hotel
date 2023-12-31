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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-md my-5">
        <form action="index.php" method="GET" class="text-center">
            <label for="parking">Parking</label>
            <input type="checkbox" name="parking">
            <input type="submit" value="Send">
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-start">Name</th>
                    <th scope="col" class="text-start">Description</th>
                    <th scope="col" class="text-center">Parking</th>
                    <th scope="col" class="text-center">Vote</th>
                    <th scope="col" class="text-center">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) {
                    if (isset($_GET['parking'])) {
                        if ($hotel['parking']) {
                ?>
                            <tr>
                                <td class="text-start"><?php echo $hotel['name']; ?></td>
                                <td class="text-start"><?php echo $hotel['description']; ?></td>
                                <td class="text-center"><?php echo 'Yes'; ?></td>
                                <td class="text-center"><?php echo $hotel['vote']; ?></td>
                                <td class="text-center"><?php echo $hotel['distance_to_center'] . ' Km'; ?></td>
                            </tr> <?php }
                            } else { ?>
                        <tr>
                            <td class="text-start"><?php echo $hotel['name']; ?></td>
                            <td class="text-start"><?php echo $hotel['description']; ?></td>
                            <td class="text-center"><?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></td>
                            <td class="text-center"><?php echo $hotel['vote']; ?></td>
                            <td class="text-center"><?php echo $hotel['distance_to_center'] . ' Km'; ?></td>
                        </tr> <?php }
                        } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>