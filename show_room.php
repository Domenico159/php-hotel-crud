<?php
require_once __DIR__ . '/partials/script/get_room.php';
?>


<!DOCTYPE html>
<html lang="en">

<?php
require_once  __DIR__  . '/partials/template/head.php';
?>

<body class="d-flex align-items-center flex-column pb-5 pt-2">

    <header class="d-flex align-items-center flex-column">
        <h1 class="card-title text-danger">
            <?php if ($room_selected['beds'] == 1) {
                echo 'Stanza Singola';
            } elseif ($room_selected['beds'] == 2) {
                echo 'Stanza Doppia';
            } else {
                echo 'Stanza Tripla';
            }  ?></h1>
    </header>
    <main class="d-flex justify-content-center  flex-wrap container">

        <div class="box-img m-3" style="width: calc(100% / 2 - 40px);">
            <img src="
        <?php if ($room_selected['beds'] == 1) {
            echo 'https://www.hotelvischi.it/files/appartamenti/1/SINGOGOLA%20COPERTINA.JPG';
        } elseif ($room_selected['beds'] == 2) {
            echo 'https://www.dchotel.it/sites/www.dchotel.it/files/styles/testata/public/images/DCHotel_Padova_camera_doppia_twin.jpg?itok=q8rLydK6';
        } else {
            echo 'https://www.medjugorjehotelspa.com/wp-content/uploads/2016/12/D8E0160-copy.jpeg';
        }  ?>" class="card-img-top" alt="..." style="width: 100%;">
        </div>

        <div class="box-text-room m-3 d-flex flex-column align-items-space-between" style="width: calc(100% / 2 - 40px);">
            <h5>Numero posti letto : <?php echo $room_selected['beds']  ?></h5>
            <h5>Numero piano : <?php echo $room_selected['floor']  ?></h5>
            <h5>Disponibile dal <span class="text-primary"><?php echo $room_selected['created_at']  ?> </span> al <span class="text-primary"><?php echo $room_selected['updated_at'] ?></span> </h5>
            <h5>ID di riferimento : <span class="text-success"><?php echo $room_selected['id'] ?></span> </h5>
            <a href="./index.php" class="btn btn-primary mt-5" style="margin-left:100px;">Torna alle stanze</a>
        </div>

    </main>

</body>

</html>