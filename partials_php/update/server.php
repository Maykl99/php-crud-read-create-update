<?php
# UPDATE DATI DATABSE ATTRAVERSO LA CLAUSOLA WHERE e con l'id e valore di modifica presi tramite formato post da un campo input

header('location: ../../index.php');
include __DIR__.'/../database.php';

if(empty($_POST['id']) && empty($_POST['beds'])){
    die('nessun id');
}

$id=$_POST['id'];
$room_number=$_POST['room_number'];

$sql = "UPDATE stanze SET room_number=$room_number WHERE id=$id";
$result = $conn->query($sql);    

$conn->close();

