<?php 
    include __DIR__.'/partials_php/templates/header.php';
    include __DIR__.'/partials_php/home/server.php';
 ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Numero stanza</th>
                            <th scope="col">Piano</th>                
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php foreach($results as $result){ ?>
                            <tr>
                                <th><?php echo $result["id"] ?></th>
                                <th><?php echo $result["room_number"] ?></th>
                                <th><?php echo $result["floor"] ?></th>
                                <th><a href="show.php?id=<?php echo $result["id"] ?>">View</a></th>
                                <th><a href="show.php?id=<?php echo $result["id"] ?>">Update</a></th>
                                <th>
                                    <form action="partials_php/delete/server.php" method="post">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                        <input type="hidden" name="id" value="<?php echo $result["id"] ?>">
                                    </form>
                                </th>
                            </tr>
                        <?php }; ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>