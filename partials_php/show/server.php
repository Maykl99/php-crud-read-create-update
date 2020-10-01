<?php
#SHOW QUERY CON CLAUSOLA WHERE SPECIFICA, valore id ottenuto tramite formato get, visualizza una pagina interna dinamica //-> show.php
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

if(empty($_GET['id'])){
    die('nessun id');
}

$id=$_GET['id'];

$row=getId($conn,'stanze',$id);
