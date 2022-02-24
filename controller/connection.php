<?php
$connection = new mysqli("localhost", "aroldo", "qwaszx.12", "DBaguilea");

if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    exit();
}