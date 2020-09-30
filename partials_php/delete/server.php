<?php
# ELIMINAZIONE VALORE DAL DATABASE IN BASE ALLA ID presa dinamicamente e passata tramite formato post da un form
include __DIR__.'/../database.php';

if(empty($_POST['id'])){
    die('nessun id');
}


$sql = "DELETE FROM stanze WHERE id=?";
$stmt=$conn->prepare($sql); // preparo la mia sql
$stmt->bind_param('i',$id); // lego la query sostituendo il segnaposto con l'id

$id=$_POST['id'];
$stmt->execute();

if($stmt){
    header("location: $basepath/index.php?id=$id&delete=1&update=-1");
}    


$conn->close();