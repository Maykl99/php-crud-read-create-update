<?php

include __DIR__.'/../database.php';

if(empty($_POST['id'])){
    die('nessun id');
}else{
    $id=$_POST['id'];
    $sql = "DELETE FROM stanze WHERE id=$id";
    $result = $conn->query($sql);

    if($result):
        echo 'eliminato';
    else: echo 'non posso eliminare questa riga';
    endif;
    
}

#header('location: index.php');


$conn->close();