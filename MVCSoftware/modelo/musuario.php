<?php
include_once 'conexion.php';
class musuario{
    function login($usr , $pass){
        $con = new conexion();
        $sql ="SELECT NOMBRE , ARCHIVO FROM CUENTA WHERE USER LIKE '".$usr."' AND PASSWORD LIKE '".$pass."';";
        $mvec=array();
        $res= mysqli_query($con->abre(),$sql) or die (mysqli_error($con->abre()));
        if($a = mysqli_fetch_array($res)){
            $mvec=$a;
        }
        $con->cierra();
        return $mvec;
    }
}


?>
