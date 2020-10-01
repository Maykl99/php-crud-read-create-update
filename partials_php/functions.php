<?php

    #AREA DELLE FUNZIONI

    // funzione query mostra tutti i valori
    function getAll($conn,$table){
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);

        if($result && $result->num_rows>0):
            $results=[];
            while($row= $result->fetch_assoc()){
                $results[] = $row;
            }
        elseif($result):
            $results=[];
        else: $results=false; 
        endif;


        $conn->close();

        return $results;
    }

    // funzione query elimina valori con id specifico
    function delete($conn,$table,$id,$basepath){
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt=$conn->prepare($sql); // preparo la mia sql
        $stmt->bind_param('i',$id); // lego la query sostituendo il segnaposto con l'id

        $id=$_POST['id'];
        $stmt->execute();

        if($stmt){
            header("location: $basepath/index.php?id=$id&delete=1&update=-1");
        }    

        $stmt->close();
        $conn->close();
    };


    // funzione query mostra valori con id specifico                
    function getId($conn,$table,$id){
        $sql = "SELECT id,room_number,floor,beds FROM $table WHERE id=$id";
        $result = $conn->query($sql);
    
        if($result && $result->num_rows>0):
            $row= $result->fetch_assoc();
    
        elseif($result):
            $row='';
        else: $row = false;
        endif;
        $conn->close();
        return $row;
    }

    // funzione di insert query
    function insertInTable($conn,$table,$basepath){
        $sql="INSERT INTO $table(room_number,floor,beds,created_at,updated_at) VALUES (?,?,?,NOW(),NOW())";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('iii',$room_number,$floor,$beds); // bind_param restituisce un valore booleano
        
        $room_number=$_POST['room_number'];
    $floor=$_POST['floor'];
    $beds=$_POST['beds'];

        $stmt->execute();
    
        if($stmt && $stmt->affected_rows > 0){
            header("Location: $basepath/show.php?id=$stmt->insert_id");
        }elseif($stmt){
            var_dump($stmt);
            exit('Nessun elemento');
        }else{
            exit('errore');
        }
    
        $stmt->close();
        $conn->close();
    }

    // funzione query update valori con id specifico
    function upDate($conn,$table,$id,$basepath){
        $sql = "UPDATE stanze SET room_number= ?, floor= ?, beds= ? WHERE id=?"; #update_at= NOW()

        $stmt=$conn->prepare($sql); // preparo la mia sql
        $stmt->bind_param("iiii",$room_number,$floor,$beds,$id); // lego la query sostituendo il segnaposto con l'id

        $room_number=$_POST['room_number'];
        $floor=$_POST['floor'];
        $beds=$_POST['beds'];
        #$id=$_POST['id'];

        $stmt->execute();

        if($stmt && $stmt->affected_rows > 0){
            header("location: $basepath/index.php?id=$id&update=2&delete=0");
        }elseif($stmt && $stmt->affected_rows == 0){
            header("location: $basepath/index.php?id=$id&update=0&delete=0");
        }else{
            die('Errore, valore non supportato');
        }

        $stmt->close();
        $conn->close();

    }

?>