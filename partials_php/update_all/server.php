<?php
# UPDATE DI TUTTI I DATI DATABASE ATTRAVERSO LA CLAUSOLA WHERE e con l'id e valore di modifica presi tramite formato post da un campo input

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


