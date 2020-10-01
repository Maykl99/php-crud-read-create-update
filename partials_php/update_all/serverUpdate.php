<?php
    #QUERY ESTRAZIONE/MODIFICA DATI LEGATO ALL'UPDATE
    include __DIR__.'/../database.php';
    include __DIR__.'/../functions.php';

    $id=$_POST['id'];
    upDate($conn,$table,$id,$basepath);