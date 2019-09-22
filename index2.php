<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script  src="js/datatables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
		<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/alertify.min.css">
		<link rel="stylesheet"  type="text/css" href="css/alertify.rtl.css">
		<link rel="stylesheet" type="text/css"  href="css/alertify.rtl.min.css">
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min1.css">
		<link rel="stylesheet" type="text/css"  href="css/bootstrap-select.css">
		<link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css"  href="css/jquery-confirm.css">
		<link rel="stylesheet" type="text/css"  href="css/jquery-ui.css">
		<link rel="stylesheet" type="text/css"   href="css/metisMenu.min.css">
		<link rel="stylesheet" type="text/css"  href="css/morris.css">
		<link rel="stylesheet" type="text/css"  href="css/select2.css">
		<link rel="stylesheet" type="text/css"  href="css/signup-form.css">
		<link rel="stylesheet" type="text/css"  href="css/tablas.css">
		<link rel="stylesheet" type="text/css"  href="css/timeline.css">
        <link rel="shortcut icon" href="images/ico3.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="css/timeline.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="css/morris.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- include semantic ui theme  -->
	<link rel="stylesheet" href="css/themes/semantic.css">
    <script src="bostrap/js/bootstrap.min.js"></script>

    <script >
    $(document).ready( function () {
    $('tablecmp').DataTable();
} );
    
    </script>


		<script>
			$(document).bind("contextmenu",function(e){
				e.preventDefault();
			});
			$(document).keydown(function(e){
				if (e.which===123) {
					return false;
				}
			});
		</script>
		
		<script type="text/javascript">
			function buscarPersonal() 
        {
            var textoBusqueda = $("input#txt_personal").val();
            if (textoBusqueda != "") 
            {

                $.post("alumnos/listarAlumnos.php", {valorBusqueda: textoBusqueda}, function(mensaje) 
                {
                    $("#cargar_personal").html(mensaje);
                });
            }
        }
			$(document).ready(function() {

	$("#cargar_personal").load("alumnos/listarAlumnos.php");
            
            $("#critBPer").change(function()
            {
                if($("#critBPer").val()=="")
                {
                    $.alert("Seleccione una Opcion");
                    $("#divInfo").hide();
                    $("#cargar_personal").hide();
                }
                if($("#critBPer").val()=="all1")
                {
                    $("#divInfo").hide();
                    $("#cargar_personal").load("listarAlumnos.php");
                }
                if($("#critBPer").val()=="bin1")
                {
                    $("#divInfo").show();
                    $("#txt_personal").focus();
                }
            });
             
            $("#buscar").load("cod_buscar.php");

$("#btnUpdAlumno").click(function() {
    $.ajax({
        url:'registro/regalumno2.php',
        type:'POST',
        data:({op:2,
        numControl:$("#txtm_numControl").val(),
        nombre:$("#txtm_nombre").val(),
        edad:$("#txtm_edad").val(),
        sexo:$("#txtm_sex").val(),
        telefono:$("#txtm_telefono").val(),
        direccion:$("#txtm_direccion").val()}),
        beforeSend: function()
        {
            $("#salirEstudiantepuesto").hide();
            $("#btnsalirEstudiantepuesto").hide();
        },
        success: function(datos)
        {
            alert("El registro ha sido cambiado");
            $("#load_mensaje").html(datos);
            $("#salirEstudiante").show();
            $("#le").load("alumnos/listarAlumnos.php");
        }
    });
});

$("#Consulta").change(function(){
//alert("hola");
if($("#Consulta").val()=="all2")
{
    $("#fecha1").hide();
    $("#txt_buscar").hide();
    $("#le").load("alumnos/listarAlumnos.php");
}
if($("#Consulta").val()=="bAl")
{
    $("#fecha1").hide();
    $("#txt_buscar").show();
    $("#txt_buscar").focus();
}
});

$("#btnDelAlumno").click(function() {
    $.ajax({
        url:'registro/regalumno2.php',
        type:'POST',
        data:({
            op:1,
            numControl:$("#txtm_numControl").val()
        }),
        beforeSend: function()
        {
            $("#salirEstudiantepuesto").hide();
            $("#btnsalirEstudiantepuesto").hide();
        },
        success: function(datos)
        {
            alert("El registro ha sido eliminado")
            $("#load_mensaje").html(datos);
            $("#salirEstudiante").show();
            $("#le").load("alumnos/listarAlumnos.php");
        }
    });
});



				$("#le").load("alumnos/listarAlumnos.php");
				$("#agregarEstudiante").click(function() {
					$.ajax({	
						url:'registro/regalumno2.php',
						type:'POST',
						data:({op:3,
						numControl:$("#numControl").val(),
						nombre:$("#nombre").val(),
						edad:$("#edad").val(),
						sexo:$("#sexo").val(),
						telefono:$("#telefono").val(),
						direccion:$("#direccion").val()}),
						beforeSend: function()
						{
							$("#salirEstudiantepuesto").hide();
							$("#btnsalirEstudiantepuesto").hide();
						},
						success: function(datos)
						{
							$("#load_mensaje").html(datos);
							$("#salirEstudiante").show();
							$("#le").load("alumnos/listarAlumnos.php");
						}
					});
		 		});

				$('#modAlumno2').on('show.bs.modal',function(event){
					var button=$(event.relatedTarget)
					var mnumControl= button.data('mnumControl')
					var mnombre = button.data('mnombre')
					var medad = button.data('medad')
					var msexo = button.data('msexo')
					var mtelefono = button.data('mtelefono')
					var mdireccion = button.data('mdireccion')
					var modal = $ (this)
					modal.find('#txtm_numControl').val(mnumControl)
					modal.find('#txtm_nombre').val(mnombre)
					modal.find('#txtm_edad').val(medad)
					modal.find('#txtm_sexo').val(msexo)
					modal.find('#txtm_telefono').val(mtelefono)
					modal.find('#txtm_direccion').val(mdireccion)
					
				});
			});
		</script>

		<title>Formulario</title>
	</head>
	<body>
     
    <div class="welcome">
   
        <h1><center>Bienvenido, a consulta de clientes</center></h1>
        
   </div>

<div class="tab-pane fade in active" id="tab_per"><br>
                                    <div class="col-md-4">
                                        <select name="critBPer" id="critBPer" class="form-control" autofocus="">
                                            <option value="">Seleccione una opción</option>
                                            <option value="all1">Ver Todos</option>
                                            <option value="bin1">Informacion del cliente</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3" style="display: none" id="divInfo">
                                        <input type="text" name="txt_personal" 
										id="txt_personal" class="form-control" 
										placeholder="Texto" onKeyUp="buscarPersonal();" 
										autofocus="true">
                                    </div>
                                    <div class="col-md-12" align="right">
										<button id="ap1" class="btn btn-primary btn_block btn-xs" >
										<i style="width: 16px" class="fa fa-user"></i> 
										Nuevo Personal</button><br><br>
                                    </div>
                                    <br><br>
                                    <div id="cargar_personal" align="center">
									<!--AQUI ES DONDE SE LISTA EL PERSONAL-->
									</div>
                                </div>	


                                <div align="center">
                               
		<H2><FONT >Formulario</FONT></H2>
		
		<P><LABEL>id_cliente: <INPUT type=number id="numControl" name="numControl" title="Ingrese Numero de Control" size="2" pattern="[0-9]" maxlenght="8" required="required"></LABEL>
		<P><LABEL>Nombre_cliente:</LABEL><INPUT type=text id="nombre" name="nombre" size="21" pattern="[A-Za-z]{5,50}" title="Ingrese Nombre" maxlenght="50" required="required">
		<P><LABEL>Edad_cliente:  </LABEL><INPUT type=number id="edad" name="edad"  min=1 max=99 size="12" maxlenght="2" title="Ingrese Edad" required="required">
		<LABEL>Sexo:  </LABEL><SELECT id="sexo" name="sexo" required="required" title="Seleccione Sexo">
			<OPTION> Masculino
			<OPTION> Femenino
		</SELECT>
		<P><LABEL>Telefono: </LABEL><INPUT type=number id="telefono" name="telefono" pattern="[0-90-9]{9}" title="Ingrese Telefono" required="required">
		<P><LABEL>Direccion: </LABEL><INPUT type=text id="direccion" name="direccion" title="Ingrese Direccion" required="required">
        <P>
        <input type="button" value="Guardar" id="agregarEstudiante">
        <input type="button" value="Modificar" id="modAlumno">
        <div id="load_mensaje"></div>

		<div id="le" align="center"></div>
        
        </div>


		
		
		
		


	

	
<div class="col-md-12">
        <div class="modal fade" id="modAlumno2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar/Eliminar cliente</h5>
                        <div id="load_ajax_mPersonal" align="center"></div>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">                  
                                    <input type="hidden" name="txtm_idp" id="txtm_idp" class="form-control">

                                    <h6>cliente:</h6>
                                    <div class="form-group">
                                        <input type=number name="txtm_numContro" id="txtm_numControl" class="form-control" placeholder="id_cliente" 
                                        onblur="this.value=this.value.toUpperCase()">
                                        <label id="mensaje1" style="display:none;color:red">Campo Vacio / Ingrese id_cliente</label>
                                    </div>

                                    <h6>Nombre_cliente:</h6>
                                    <div class="form-group">
                                        <input type="text" name="txtm_nombre1" id="txtm_nombre" class="form-control" placeholder="Nombre_cliente (s)" 
                                        onblur="this.value=this.value.toUpperCase()">
                                        <label id="mensaje1" style="display:none;color:red">Campo Vacio / Ingrese un nombre</label>
                                    </div>
                                    
                                    <h6>Edad_cliente:</h6>
                                     <div class="form-group">
                                        <input type="number" min="18" max="70" name="txtm_edad" id="txtm_edad" class="form-control" placeholder="Edad" 
                                        onblur="this.value=this.value.toUpperCase()">
                                        <label id="mensaje1" style="display:none;color:red">Campo Vacio / Ingrese un Edad</label>
                                    </div>

                                    <h6>Sexo:</h6>
                                    <div class="form-group">
                                        <select name="txtm_sexo" id="txtml_sexo" class="form-control">
                                            <option value="">Seleccione Sexo</option>
                                            <option value="H">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                        <label id="mensaje2" style="display:none;color:red">Campo Vacio / Ingrese su Sexo</label>
                                    </div>

                                    <h6>Teléfono:</h6>
                                    <div class="form-group">
                                        <input type=number name="txtm_telefono" id="txtm_telefono" class="form-control" placeholder="Teléfono">
                                        <label id="mensaje1" style="display:none;color:red">Campo Vacio / Ingrese telefono</label>
                                    </div>
                                    <h6>Dirección:</h6>
                                    <div class="form-group">
                                        <input type="text" name="txtm_dir" id="txtm_direccion" class="form-control" placeholder="Dirección" 
                                        onblur="this.value=this.value.toUpperCase()">
                                        <label id="mensaje1" style="display:none;color:red">Campo Vacio / Ingrese la direccion</label>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="modal-footer">
                        <button id="btnUpdAlumno" class="btn btn-primary"><i class="fa fa-refresh"></i> Modificar</button>
                        <button id="btnDelAlumno" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnExiPersonal"><i class="fa fa-sign-out"></i> Salir</button>
                    </div>
                </div>
            </div>
        </div>
   
<nav aria-label="...">
<center>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
  </center>
</nav>
 
    <div class="welcome">
   
    <center>
    <a href="vistamenu.php">regresar menu</a>
    <P> <a href="cerrar.php">Cerrar sesion</a>
        </center>
   </div>



 


 <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/metisMenu.min.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <script type="text/javascript" src="js/sb-admin-2.js"></script>
</body>
</html>