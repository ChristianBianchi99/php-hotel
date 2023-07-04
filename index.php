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
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row gx-5 gy-3 my-3">
                <?php foreach($hotels as $hotel){ ?>
                    <div class="col-4">
                        <div class="content text-center">
                            <h2><?php echo $hotel['name'] ?></h2>
                            <table class='table text-start'>
                                <tr>
                                    <th>
                                        Descrizione:
                                    </th>
                                    <td>
                                        <?php echo $hotel['description'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Parcheggio:
                                    </th>
                                    <td>
                                        <?php if($hotel['parking']){ ?>
                                            Disponibile
                                        <?php }else{ ?>
                                            Non disponibile
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Voto:
                                    </th>
                                    <td>
                                        <?php echo $hotel['vote'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Distanza dal centro:
                                    </th>
                                    <td>
                                        <?php echo $hotel['distance_to_center'].'km' ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>