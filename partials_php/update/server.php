<?php
# UPDATE SINGOLO DATO (numero_stanza) DAL DATABASE ATTRAVERSO LA CLAUSOLA WHERE e con l'id e valore di modifica presi tramite formato post da un campo input
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

if(empty($_POST['id']) && empty($_POST['beds'])){
    die('nessun id');
}

$id=$_POST['id'];
#getId($conn,'stanze',$id);

$sql = "UPDATE stanze SET room_number=?  WHERE id=?"; #update_at= NOW()
$stmt=$conn->prepare($sql); // preparo la mia sql
$stmt->bind_param('ii',$room_number,$id); // lego la query sostituendo il segnaposto con l'id

$id=$_POST['id'];
$room_number=$_POST['room_number'];

var_dump($stmt);

/* if($stmt && $stmt->affected_rows > 0){
    header("location: $basepath/index.php?id=$id&update=1&delete=0");
}elseif($stmt && $stmt->affected_rows == 0){
    header("location: $basepath/index.php?id=$id&update=0&delete=0");
} */
$stmt->execute();

$stmt->close();
$conn->close();

