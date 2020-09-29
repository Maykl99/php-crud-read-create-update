<?php

include __DIR__.'/../database.php';

$sql = "SELECT id,room_number, floor FROM stanze";
$result = $conn->query($sql);

if($result && $result->num_rows>0):
    $results=[];
    while($row= $result->fetch_assoc()){
        $results[] = $row;
    }
elseif($result):
    echo "Non ci sono risultati";
else: echo "Query error";
endif;


$conn->close();