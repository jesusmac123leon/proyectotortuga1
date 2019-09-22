
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type= "text/javascript"  src="js/datatables.min.js"></script>
    
 
 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
      
</head>
<body>

<script >
    $(document).ready( function () {
    $('#tablecmp').DataTable();
} );
    
    </script>
<?php
    require '../conexion/conexion.php';
    if (isset($_POST['valorBusqueda'])){
        
        $consultaBusqueda = $_POST['valorBusqueda'];         
        $query = $conn->query("SELECT *FROM 
		alumnos p
		WHERE 
		p.numControl LIKE '%$consultaBusqueda%' OR 
		p.nombre LIKE '%$consultaBusqueda%'  OR 
		p.edad LIKE '%$consultaBusqueda%' OR 
		p.sexo LIKE '%$consultaBusqueda%' OR 
		p.telefono LIKE '%$consultaBusqueda%'OR
        p.direccion LIKE '%$consultaBusqueda%'");
        mostrar($conn,$query);
    }else{
        $query = $conn->query("SELECT *FROM alumnos");
        mostrar($conn,$query);
    }
    function mostrar($conn,$query)
    {
        $row=$query->fetch_assoc();
        $count=$query->num_rows;
        if($count>0)
        {
            ?>
			<table id="tablecmp" class="table table-bordered">
                <thead>
                    <tr style="background-color: #f5f5f5">
                        <!--th>CUENTAS</th-->
                        <th><i class="fa fa-sort-alpha-asc" style="width: 16px"></i> id_cliente</th>
                        <th><i class="fa fa-user" style="width: 16px"></i> Nombre_cliente</th>
                        <th><i class="fa fa-sitemap" style="width: 16px"></i> Edad_cliente</th>
						<th><i class="fa fa-institution" style="width: 16px"></i>Sexo</th>
                        <th><i class="fa fa-institution" style="width: 16px"></i>Telefono</th>
                        <th><i class="fa fa-institution" style="width: 16px"></i>Direccion</th>
                        <th style="text-align: center;"><i class="fa fa-edit" style="width: 16px"></i> ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                do 
                {
                ?>
                    <tr>
                        <td><?php echo $row['numControl']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['edad'];?></td>
                        <td><?php echo $row['sexo'];?></td>
                        <td><?php echo $row['telefono'];?></td>
						<td><?php echo $row['direccion']; ?></td>
                        <td align="center" width="8%">
                            <button
                                class="btn btn-warning btn-xs" data-toggle='modal' data-target='#modAlumno2' 
                                data-mnumControl='<?php echo $row['numControl'];  ?>'
                                data-mnombre='<?php echo $row['nombre']; ?>'
                                data-medad='<?php echo $row['edad']; ?>'
                                data-msexo='<?php echo $row['sexo']; ?>'
                                data-mtelefono='<?php echo $row['telefono']; ?>'
                                data-mdireccion='<?php echo $row['direccion']; ?>'>
                                <i class="fa fa-refresh"></i>|<i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                
                <?php
                }
                while ($row = $query->fetch_assoc());
                ?>


                </tbody>
                <tfoot align=center style='color:red'>
                    <tr>
                        <td colspan=7><b>
                            <?php
                                if ($count>=10)
                                {
                                    echo "Se Encontraron: ";
                                }
                                else
                                {
                                    echo "Se Encontro: ";
                                }
                                if ($count>1)
                                {
                                    echo $count." Coincidencias";
                                }
                                else
                                {
                                    echo $count." Coincidencia";
                                }
                            ?>
                        </b></td>
                    </tr>
                </tfoot>
            </table>			
            <?php
        }
        else
        {
            ?>
            <div class="alert alert-warning" align="center">
                <b>NO EXISTE NINGUN DATO</b>
            </div>
            <?php
        }
    }
?>


</body>
</html>