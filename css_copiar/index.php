<?php
    require 'seguridad/conn_mysqli.php';
    require 'includes/fechas.php';
    $resultado=$conn->query("SELECT *FROM empresa");
    $we=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>ME - Login</title>
    <meta charset="utf-8">
    <script type="text/javascript">{if(history.forward(1)){location.replace(history.forward(1))}}</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SisMobile">
    <link rel="shortcut icon" href="images/ico3.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="css/timeline.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="css/morris.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/alertify.css">
	<!-- include semantic ui theme  -->
	<link rel="stylesheet" href="css/themes/semantic.css">
	<!-- include alertify script -->
	<script src="js/alertify.js"></script>	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#sqlLog").click(function(event)
            {
                $.ajax({
                    url: "seguridad/controlAjax.php",
                    type: "POST",
                    data: {use : $("#user").val(), pas : $("#pass").val()},
                    beforeSend: function(objeto)
                    {
                        $("#mensajeLog").html("ENVIANDO...");
                    },
                    success: function(c)
                    {
                        $("#mensajeLog").html(c);
                        $("#user").focus();
                        $("#user").val("");
                        $("#pass").val("");
                    }
                });
                event.preventDefault();
            });
        });
    </script>
    <style type="text/css">
        body{font-family: calibri;}
        input{letter-spacing: 3px;text-align: center;}
    </style>
</head>
<body>
    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="right">
                <img src="images/sistmobile.jpg" align="left" class="img-responsive" width="50px">
            	<?php
                    if($we['logo']=="")
                    {
                        ?>
                        <img src="images/logo-itt.png" width="50px">
                        <?php
                    }
                    else if ($we['url']=="")
                    {
                        ?>
                        <a href="">
                            <img src="images/<?php echo $we['logo']; ?>" width="50px">
                        </a>
                        <?php
                    }
                    else if ($we['url']!="")
                    {
                        ?>
                        <a href="<?php echo $we['url']; ?>" target="_blank">
                            <img src="images/<?php echo $we['logo']; ?>" width="50px">
                        </a>
                        <?php
                    }
                ?>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5" align="center">
                        <p class="lead" align="center"><b><?php echo $we['departamento']; ?></b><span class="text-success"></span></p>
                        <img src="images/logo-itt.png" class="img-responsive" style="width: 120px;max-width: auto;"><br>
                        <i class="fa fa-users"></i> Bienvenidos<br>
                    </div>
                    <div class="col-md-7">
                        <div class="well">
                            <div id="form-login" style="display:block">
                                <div id="mensajeLog" align="center" style="color:red;font-weight: bold;height: 25px"></div>
                                <legend><center>Ingrese Sus Datos</center></legend>
                                <div class="form-group input-group">
                                    <input type="text" name="user" id="user" class="form-control" placeholder="Usuario" autofocus="" autocomplete="false" autosave="off">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>
                                <div class="form-group input-group">
                                    <input type="password" name="pass" id="pass" class="form-control" maxlength="25" placeholder="Contraseña" autocomplete="false" autosave="off">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" id="sqlLog">Iniciar <i class="fa fa-sign-in"></i></button>
                                </div>
                                <?php
                                    $res_user=$conn->query("SELECT *FROM personal");
                                    $row=$res_user->fetch_assoc();
                                    $ccon=$res_user->num_rows;
                                    $val=$row['rfcp'];
                                    $pa1=$row['passwordp'];
                                    if ($ccon>0)
                                    {
                                        if($val=="admin" && $pa1=='admin')
                                        {
                                            echo "USUARIO: <b>".$val."</b> "."PASSWORD: <b>".$pa1."</b>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <b>Sistema S
                    </div>
                    <div class="col-md-5" align="right">
                        <b><?php echo DiaFechaCompleta(); ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/metisMenu.min.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <script type="text/javascript" src="js/sb-admin-2.js"></script>
</body>
</html>