<?php
# UPDATE DATI DATABSE ATTRAVERSO LA CLAUSOLA WHERE e con l'id e valore di modifica presi tramite formato post da un campo input

header('location: ../../index.php');
include __DIR__.'/../database.php';

if(empty($_POST['id']) && empty($_POST['beds'])){
    die('nessun id');
}

$sql = "UPDATE stanze SET room_number=? WHERE id=?";
$stmt=$conn->prepare($sql); // preparo la mia sql
$stmt->bind_param('ii',$room_number,$id); // lego la query sostituendo il segnaposto con l'id

$id=$_POST['id'];
$room_number=$_POST['room_number'];

$stmt->execute();

$conn->close();