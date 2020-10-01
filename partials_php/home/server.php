<?php
#QUERY ESTRAZIONE E MOSTRA DEI DATI DAL DATABASE SELEZIONATO
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

$results= getAll($conn,'stanze');
