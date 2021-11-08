<?php
class conexion{
    private $cn = NULL;
    private $srv = "localhost";
    private $usr = "root";
    private $pass ="";
    private $bdd ="PMVC";
    function abre(){
        if($this->cn == NULL){
            $this->cn = mysqli_connect($this->srv,$this->usr,$this->pass,$this->bdd);
        }
        return $this-> cn;
    }
    function cierra(){
        mysqli_close($this->cn);
    }
}
?>
