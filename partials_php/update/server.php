<?php

include __DIR__.'/../database.php';

if(empty($_POST['id'])){
    die('nessun id');
}else{
    $id=$_POST['id'];
    $sql = "UPDATE stanze SET beds=$beds WHERE id=$id";
    $result = $conn->query($sql);

    if($result):
        echo 'Modificato';
    else: echo 'non posso modificare questa riga';
    endif;
    
}

#header('location: index.php');


$conn->close();