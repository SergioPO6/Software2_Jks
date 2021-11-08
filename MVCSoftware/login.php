<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./recursos/estilos/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>Iniciar Sesion</h1>
        <form action="./controlador/cUsuario.php" method="POST">
            <div class="txt_field">
                <input type="user" name="usuario" required >
                <span><i class="fal fa-user"></i></span>
                <label>Usuario</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span><i class="fal fa-key"></i></span>
                <label>contraseña</label>
            </div>
            <input type="submit" value="INGRESAR">
        </form>
    </div>
    <?php
       if(isset($_REQUEST["et"])){
        echo "<script>alert('usuario incorrecto')</script>";
       }    
    ?>
</body>
</html>