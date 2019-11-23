
<?php
	date_default_timezone_set('GMT');
	date_default_timezone_set('America/Mexico_City');
<<<<<<< HEAD
	$host="us-cdbr-iron-east-05.cleardb.net";
	$user="b83c2d293c6136";
	$password="22fe08c4";
	$name="heroku_eaf83c356a363bf";
=======
	$host="localhost";
	$user="root";
	$password="";
	$name="misitio1";
>>>>>>> desarrollo
	$conn=@new mysqli($host,$user,$password,$name);
	if(mysqli_connect_errno())
	{
		exit();
	}
?>
