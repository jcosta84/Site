<?php

$conn = new mysqli(
    "localhost",
    "root",
    "Pcosta9850053",
    "pet_store"
);

if($conn->connect_error){
    die("Erro: " . $conn->connect_error);
}

?>