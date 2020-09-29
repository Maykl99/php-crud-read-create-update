<?php
    include __DIR__.'/env.php';

    # connection
    $conn = new mysqli($serverName,$userName,$password,$dbName);

    # check connection
    if($conn && $conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

    #$conn->close();