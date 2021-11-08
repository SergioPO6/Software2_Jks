<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../recursos/estilos/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <span>BIENVENIDO :  <?=$a[0]?></span>
        <div class="desc">Es un gusto tener por aqui de vuelta</div>
        <a href="../login.php"><i class="fas fa-reply"></i></a>
        <div class="color"><?php echo '<img src="data:image/png;base64,'. base64_encode($a[1]).'">';?></div>
    </div>
</body>
</html>