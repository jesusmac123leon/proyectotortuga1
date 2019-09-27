
<?php
	date_default_timezone_set('GMT');
	date_default_timezone_set('America/Mexico_City');
	$host="localhost";
	$user="root";
	$password="";
	$name="misitio1";
	$conn=@new mysqli($host,$user,$password,$name);
	if(mysqli_connect_errno())
	{
		exit();
	}
?>
