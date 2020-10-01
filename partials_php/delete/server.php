<?php
# ELIMINAZIONE VALORE DAL DATABASE IN BASE ALLA ID presa dinamicamente e passata tramite formato post da un form
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

if(empty($_POST['id'])){
    die('nessun id');
}

$id=$_POST['id'];
delete($conn,'stanze',$id,$basepath);
