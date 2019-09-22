<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
   
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>


   
   <div class="welcome">
      
        <h1>Bienvenido, has logrado iniciar sesion</h1>
       
   </div>
   <div class="welcome" >
    <table class="logo-title">
 
        <tr  >
            <td>cliente</td>
            <td></td>
            <td>personal</td>
            <td></td>
            <td>proveedor</td>
        </tr>
        <tr class class="logo-title">
        
            <td ><a href="index2.php"><img src='./image/cliente.jpg' ></a></td>
            <td></td>
            <td><a><img src='./image/personal.png'></a></td>
            <td></td>
            <td><a><img src='./image/provedor.png'></a></td>
        </tr>
        <tr  >
            <td>mesas</td>
            <td></td>
            <td>tortas</td>
            <td></td>
            <td>insumo</td>
        </tr>
        <tr class class="logo-title">
        
            <td ><a ><img src='./image/mesa3.png' ></a></td>
            <td></td>
            <td><a><img src='./image/torta.jpg'></a></td>
            <td></td>
            <td><a><img src='./image/insumo.png '></a></td>
        </tr>
 
        
 
    </table>
    <div class="welcome">
    
    <form  name="enviar_archivo_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
		<input type="file" name="archivo_fls" />
<input type="submit" name="subir_btn" value="Subir Archivo" />
	</form>
  
   <a href="cerrar.php">Cerrar sesion</a>
</div>
</div>
</body>
</html>