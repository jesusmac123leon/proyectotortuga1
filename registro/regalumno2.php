<?php
	require '../conexion/conexion.php';
	if (isset($_POST['op'])) {
		$op=$_POST['op'];
	}
		$op=$_POST['op'];
	switch($op)
	{
		//Caso para guardar datos
		case '1':{
			$numControl=$_POST['numControl'];
			$sql="SELECT * FROM alumnos WHERE numControl=$numControl";
			$result=$conn->query($sql);
			$nf=$result->num_rows;
				echo "Borrando....";
				echo $numControl;
				$sql_eliminar ="DELETE FROM alumnos WHERE numControl=$numControl";
				$sq=$conn->query($sql_eliminar);
				if($sq){
					echo "El registro ha sido eliminado";
				}
				else{
					echo "El registro no ha sido eliminado";
				}
			$conn->close();
		}break;
		case '2':{
			$numControl=$_POST['numControl'];
			$nombre=$_POST['nombre'];
			$edad=$_POST['edad'];
			$sex=$_POST['sexo'];
			$tel=$_POST['telefono'];
			$dir=$_POST['direccion'];
			$sql="SELECT * FROM alumnos WHERE numControl=$numControl";
			$result=$conn->query($sql);
			$nf=$result->num_rows;
				echo "Modificando....";
				echo $nombre;
				echo $numControl;
				echo $edad;
				echo $sex;
				echo $tel;
				echo $dir;
				$sql_actualizar ="UPDATE alumnos SET numControl=$numControl, nombre='$nombre', edad=$edad, sexo='$sex', telefono=$tel, direccion='$dir' where numControl=$numControl";
				$sq=$conn->query($sql_actualizar);
				if($sq){
					echo "Los datos han sido modificados";
				}else{
					echo "Los datos no han sido modificados";
				}
			$conn->close();

		}break;
		case '3':{
			$numControl=$_POST['numControl'];
			$nombre=$_POST['nombre'];
			$edad=$_POST['edad'];
			$sex=$_POST['sexo'];
			$tel=$_POST['telefono'];
			$dir=$_POST['direccion'];
			$sql="SELECT * FROM alumnos WHERE numControl=$numControl";
			$result=$conn->query($sql);
			$nf=$result->num_rows;
			if($nf>0)
			{
				echo "El registro ya existe";
			}else{
				echo "Ingresando....";
				$sql_insertar ="INSERT INTO alumnos(numControl,nombre,edad,sexo,telefono,direccion) values($numControl,'$nombre',$edad,'$sex',$tel,'$dir')";
				$sq=$conn->query($sql_insertar);
				if($sq){
					echo "Los datos han sido guardados";
				}else{
					echo "Los datos no han sido guardados";
				}
			}
			$conn->close();
		}break;
	}
?>