

<?php

// Get rooms from db hotel 

require_once __DIR__ . '/database.php';


$sql = "SELECT * FROM stanze";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    $rooms = [];

    while ($row = $result->fetch_assoc()) {

        $rooms[] = $row;
    };
} elseif ($result) {
    echo 'Result found';
} else {
    echo 'Query error';
};

$conn->close();
