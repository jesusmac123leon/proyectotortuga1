<?php
	require '../conexion/conexion.php';
	//'echo' se utiliza para prueba
	if (isset($_POST['op'])) {
		echo $op=$_POST['op'];
	}else{
		$op='';
	}
	switch($op)
	{
		//Caso para guardar datos
		case 1:
			echo 'Caso 1';
			$nc=$_POST['numControl'];
			$nombre=$_POST['nombre'];
			$edad=$_POST['edad'];
			$sex=$_POST['sexo'];
			$tel=$_POST['telefono'];
			$dir=$_POST['direccion'];
			$sql="SELECT * FROM alumnos WHERE numControl=$nc";
			$result=$conn->query($sql);
			$nf=$result->num_rows;
			if($nf>0)
			{
				header("location:../index.php?msg=2");
			}
			else
			{
				$sql_insertar ="INSERT INTO alumnos(numControl,nombre,edad,sexo,telefono,direccion) values($nc,'$nombre',$edad,'$sex',$tel,'$dir')";
				$sq=$conn->query($sql_insertar);
				if($sq)
				{
					echo "Se guarda la infromacion";
								header("location:../index.php?msg=1");
								exit();
				}
				else
				{
					echo "No se guardo";
				}
			}
			$conn->close();

		break;
		case 2:
			echo 'Caso 2';
		break;
		case 3:
			$sql_insertar ="INSERT INTO alumnos(numControl,nombre,edad,sexo,telefono,direccion) values($nc,'$nombre',$edad,'$sex',$tel,'$dir')";
			$sq=$conn->query($sql_insertar);
			if ($sq) {
				echo "Datos registrados";
			}else{
				echo "Datos no registrados";
			}
			echo "string";
			break;
		case '':
			header("location:../index.php");
			break;
	}
?>