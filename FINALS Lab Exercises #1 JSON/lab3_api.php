<?php
header('Content-Type: application/json');

$user = array(
    "id" => 1,
    "name" => "King",
    "email" => "kingpaor24@gmail.com",
    "status" => "active"
);

echo json_encode($user);
?>
