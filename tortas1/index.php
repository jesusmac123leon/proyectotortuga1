<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilomenu.css">
</head>
<body onload="colorPrecios()">
<h1>menu de tortas</h1>
<br>
<br>

 <div>
   
<table>
    <div id="container"></div>
  <tr>
    <th><h2>Nombre</h2></th>
    <th><h2>Precio</h2></th>
    <th><h2>ingrediente</h2></th>	
    <th><h2>fotografia de tortas</h2></th>
  </tr>
  <tr>
    <td>torta de tosino</td>
    <td>40</td> 
    <td>tomate,carne fria, 
      pechuga,quesillo,salchicha </td>	
	<td><img src="imagen/torta1.jpeg"></td> 
  </tr>
  <tr>
    <td>torta de cesina </td>
    <td>30</td> 
	<td>lechuga,cesina,aguacate,quesillo,mayonesa</td>
    <td><img src="imagen/torta2.jpeg" ></td>
  </tr>
  <tr>
    <td>torta grinca</td>
    <td>45</td> 
	<td>lechuga,salchicha,carne de res,quesillo,chorizo</td>
    <td><img src="imagen/torta3.jpeg"></td>
  </tr>
  <tr>
    <tr>
    <td>chuletorta</td>
    <td>70</td> 
	<td>jamon.chuleta,jitomate,aguacate,quesillo,mayonesa</td>
    <td><img src="imagen/tortat.jpeg"></td>
  </tr>
  <tr>
    <tr>
    <td>torta de asada </td>
    <td>50</td> 
	<td>Casada,tomate,aguacate,cebolla,</td>
    <td><img src="imagen/tortaasada.jpeg" ></td>
  </tr>
  <tr>
    <tr>
    <td>torta cubana </td>
    <td>70</td> 
	<td>pechuga,jamon,salchicha,queso 
     amarillo,quesillo,mayonesa</td>
    <td><img src="imagen/tortacuba.jpeg" ></td>
  </tr>
</div>
</table>
<div class="welcome">
   
  <center>
  <a href="../vistamenu.php">regresar menu</a>
  <P> <a href="../cerrar.php">Cerrar sesion</a>
      </center>
 </div>
</div>




<script type="text/javascript">

      function colorPrecios() {

	     var precioProducto = document.getElementsByTagName("TD");
         
		 for(var i=1;i<20;i=i+4){

		 	 if(precioProducto[i].innerHTML>1000){

               precioProducto[i].style.color="red";
	 }
		 
	 }

	 
	 }

 </script>

</body>
</html>