<?php

#PAGINA INSERT,inserisci una nuova stanza,piano,letti

include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

!empty($_POST['room_number']) || die('Non hai inserito il numero della stanza');
!empty($_POST['floor']) || die('Non hai inserito il numero del piano');
!empty($_POST['beds']) || die('Non hai inserito il numero dei letti');


insertInTable($conn,'stanze',$basepath);



