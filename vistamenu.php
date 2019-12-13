<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
   
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>


   
   
   <div class="welcome" >
   <div class="logo-title">
   <h2>menu</h2>    
                
            </div>
    <table class="logo-title">
     <h1>Tortugas</h1>
        <tr  >
            <td>cliente</td>
            <td></td>
            <td>personal</td>
            <td></td>
            <td>proveedor</td>
        </tr>
        <tr class class="logo-title">
        
            <td ><a href="index2.php"><img src='./image/icono10.png' ></a></td>
            <td></td>
            <td><a  href="personal.php"><img src='./image/icono2.png'></a></td>
            <td></td>
            <td><a href="proveedor.php"><img src='./image/icono3.png'></a></td>
        </tr>
        <tr  >
            <td>mesas</td>
            <td></td>
            <td>tortas</td>
            <td></td>
            <td>insumo</td>
        </tr>
        <tr class class="logo-title">
        
            <td ><a href="mesa.php"><img src='./image/icono5.png' ></a></td>
            <td></td>
            <td><a href="./tortas1/index.php"><img src='./image/icono4.png'></a></td>
            <td></td>
            <td><a href="insumo.php"><img src='./image/icono6.png '></a></td>
        </tr>
 
        
 
    </table>
   
    
    <form  name="enviar_archivo_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
		<input type="file" name="archivo_fls" />
<input type="submit" name="subir_btn" value="Subir Archivo" />
	</form>
  
   <a href="cerrar.php">Cerrar sesion</a>
  
   
</div>
</div>
</body>
</html>