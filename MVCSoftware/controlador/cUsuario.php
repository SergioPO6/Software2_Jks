<?php
require_once '../modelo/musuario.php';
$usr =$_REQUEST["usuario"];
$pass =$_REQUEST["password"];
$res = new musuario();
$a = $res->login($usr,$pass);
if($a){
    require_once '../vista/menu.php';
}else{
    header("Location: ../login.php?et=1");
}

//echo '<img src="data:image/png;base64,'. base64_encode($a[1]).'">';
//$cant =$_REQUEST["cant"];
?>