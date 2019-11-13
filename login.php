<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        
        try{
            $conexion = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_eaf83c356a363bf', 'b83c2d293c6136', '22fe08c4');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM login WHERE usuario = :usuario AND clave = :clave'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location:vistamenu.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
require 'frontend/login-vista.php';


?>