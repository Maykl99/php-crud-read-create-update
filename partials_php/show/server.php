<?php
#SHOW QUERY CON CLAUSOLA WHERE SPECIFICA, valore id ottenuto tramite formato get, visualizza una pagina interna dinamica //-> show.php
include __DIR__.'/../database.php';

if(empty($_GET['id'])){
    die('nessun id');
}

$id=$_GET['id'];

$sql = "SELECT id,room_number,floor,beds FROM stanze WHERE id=$id";
$result = $conn->query($sql);

if($result && $result->num_rows>0):
    
    $row= $result->fetch_assoc();

elseif($result):
    echo "Non ci sono risultati";
else: echo "Query error";
endif;


$conn->close();