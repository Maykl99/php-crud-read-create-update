<?php
    #QUERY ESTRAZIONE/MODIFICA DATI LEGATO ALL'UPDATE
    include __DIR__.'/../database.php';

/* if(empty($_POST['id']) && empty($_POST['beds']) && empty($_POST['room_number']) && empty($_POST['floor'])){
    die('nessun id o valore valido');
} */

$sql = "UPDATE stanze SET room_number= ?, floor= ?, beds= ? WHERE id=?";

$stmt=$conn->prepare($sql); // preparo la mia sql
$stmt->bind_param("iiii",$room_number,$floor,$beds,$id); // lego la query sostituendo il segnaposto con l'id



$room_number=$_POST['room_number'];
$floor=$_POST['floor'];
$beds=$_POST['beds'];
$id=$_POST['id'];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0){
    header("location: $basepath/index.php?id=$id&update=2&delete=0");
}elseif($stmt && $stmt->affected_rows == 0){
    header("location: $basepath/index.php?id=$id&update=0&delete=0");
}else{
    die('Errore, valore non supportato');
}