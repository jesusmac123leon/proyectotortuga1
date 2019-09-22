<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Registro de tortugas </title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    </head>
    
    
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="image/re.jpg" alt="">
                <h2>tortugas</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <a href="register.php"><li class="module-register">Registro</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido</h1><h2>tortugas</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
        </form>
    </div>
    
    <script src="js/jquery1.js"></script>
    <script src="js/script1.js"></script>
</body>
</html>