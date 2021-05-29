<!-- Import get db -->

<?php
require_once __DIR__ . '/partials/script/get_rooms.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
require_once  __DIR__  . '/partials/template/head.php';
?>

<body class="d-flex align-items-center flex-column" style="background-color: #e6f9ff;">

    <header class="d-flex align-items-center flex-column">
        <h1 style="font-family:cursive">Hotel Zummo</h1>
        <h2 class="mt-2">Archivio stanze</h2>
    </header>
    <main class="d-flex jusstify-content-center align-items-center flex-wrap container">
        <?php

        if (!empty($rooms)) {
            foreach ($rooms as $room) { ?>

                <div class="card show-room" style="width: calc(100% / 4 - 40px); margin:40px 20px; cursor:pointer;">
                    <img src="<?php if ($room['beds'] == 1) {
                                    echo 'https://www.hotelvischi.it/files/appartamenti/1/SINGOGOLA%20COPERTINA.JPG';
                                } elseif ($room['beds'] == 2) {
                                    echo 'https://www.dchotel.it/sites/www.dchotel.it/files/styles/testata/public/images/DCHotel_Padova_camera_doppia_twin.jpg?itok=q8rLydK6';
                                } else {
                                    echo 'https://www.medjugorjehotelspa.com/wp-content/uploads/2016/12/D8E0160-copy.jpeg';
                                }  ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">
                            <?php if ($room['beds'] == 1) {
                                echo 'Stanza Singola';
                            } elseif ($room['beds'] == 2) {
                                echo 'Stanza Doppia';
                            } else {
                                echo 'Stanza Tripla';
                            }  ?></h3>
                        <h5> Stanza numero : <?php echo $room['room_number'] ?> </h5>
                        <h5>Piano : <?php echo $room['floor'];  ?></h5>
                        <a href="./show_room.php?id=<?php echo $room['id']; ?>" target="_blank" class="btn btn-primary " style="margin-left:100px;">INFO</a>
                    </div>
                </div>

        <?php };
        } else {
            echo 'Non sono presenti stanze';
        }
        ?>
    </main>
    <footer>
    </footer>

</body>

</html>