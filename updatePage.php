<?php 
    #PAGINA DI MODIFICA DELLA COLONNA STANZE, ATTRAVERSO IL FORM, PASSANDO L'ID
    include __DIR__.'/partials_php/templates/header.php';
    include __DIR__.'/partials_php/update_all/server.php';
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="partials_php/update_all/serverUpdate.php" method="post">
                    <div class="form-group">
                        <label for="room_number">Numero della stanza</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="room_number" name="room_number" value="<?php echo $row['room_number']?>">
                    </div>

                    <div class="form-group">
                        <label for="floor">Numero Piano</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="floor" name="floor" value="<?php echo $row['floor']?>">
                    </div>

                    <div class="form-group">
                        <label for="beds">Numero letti</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="beds" name="beds" value="<?php echo $row['beds']?>">
                    </div>

                    <div class="form-group">
                        <label for="beds">Id</label>
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="beds" name="id" value="<?php echo $row['id']?>">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control bg-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>