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

<?php foreach ($hotels as $hotel) {
    foreach ($hotel as $hotelInfo => $value) {
        if ($hotelInfo == 'parking' && $value === true) {
?>
            <p>
                <?php echo 'La struttura è dotata di parcheggio'; ?>
            </p>
        <?php        } else if ($hotelInfo == 'parking' && $value === false) {
        ?> <p>
                <?php echo 'La struttura non è dotata di parcheggio'; ?>
            </p>
        <?php        } else {
        ?> <p>
                <?php echo $value; ?>
            </p>
<?php       }
    }
}
?>