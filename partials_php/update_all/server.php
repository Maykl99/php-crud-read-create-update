<?php
# UPDATE DI TUTTI I DATI DATABASE ATTRAVERSO LA CLAUSOLA WHERE e con l'id e valore di modifica presi tramite formato post da un campo input

include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

if(empty($_GET['id'])){
    die('nessun id');
}

$id=$_GET['id'];
$row=getId($conn,'stanze',$id);




