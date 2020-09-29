<?php
# ELIMINAZIONE VALORE DAL DATABASE IN BASE ALLA ID presa dinamicamente e passata tramite formato post da un form
header('location: ../../index.php');
include __DIR__.'/../database.php';

if(empty($_POST['id'])){
    die('nessun id');
}

$id=$_POST['id'];
$sql = "DELETE FROM stanze WHERE id=$id";
$result = $conn->query($sql);    


$conn->close();