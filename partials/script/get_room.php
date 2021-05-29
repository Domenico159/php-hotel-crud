<?php

// Get room select by ID
require_once __DIR__ . '/database.php';

$id = empty($_GET['id']) ? false : $_GET['id'];


if ($id) {

    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");

    $stmt->bind_param('s', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {

        $room_selected = $result->fetch_assoc();
    }
}

$conn->close();
