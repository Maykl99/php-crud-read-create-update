<?php 
    #PAGINA INSERT
    include __DIR__.'/partials_php/templates/header.php';
 ?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="partials_php/create/server.php" method="post">
                    <div class="form-group">
                        <label for="room_number">Numero della stanza</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="room_number" name="room_number" value="" placeholder="Inserisci il numero della stanza">
                    </div>

                    <div class="form-group">
                        <label for="floor">Numero Piano</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="floor" name="floor" value="" placeholder="Inserisci il piano">
                    </div>

                    <div class="form-group">
                        <label for="beds">Numero letti</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="beds" name="beds" value="" placeholder="Inserisci i letti">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control bg-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>