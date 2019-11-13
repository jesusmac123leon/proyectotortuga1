<?php
    
    try{
        $conexion = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_eaf83c356a363bf', 'b83c2d293c6136', '22fe08c4');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>