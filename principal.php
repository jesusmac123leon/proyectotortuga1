<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'frontend/vistamenu.php';
    }else{
        header ('location: login.php');
    }
        
?>