<?php
    #PAGINA INTERNA,VISUALIZZA IL COMPONENTE SELEZIONATO

    include __DIR__.'/partials_php/templates/header.php';
    include __DIR__.'/partials_php/show/server.php';
?>

<body>
    <a href="index.php">Torna indietro</a>
    <ul class="group">
        <li class="list-group-item">ID: <?php echo $row['id']; ?></li>
        <li class="list-group-item">Numero della stanza: <?php echo $row['room_number']; ?></li>
        <li class="list-group-item">Piano <?php echo $row['floor']; ?></li>
        <li class="list-group-item">Numero di letti: <?php echo $row['beds']; ?></li>
    </ul>
</body>
</html>